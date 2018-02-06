<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use JasperPHP\JasperPHP;

use App\User;
class ReportController extends Controller
{
/**
     * Reporna um array com os parametros de conexão
     * @return Array
     */
    public function getDatabaseConfig()
    {
        return [
            'driver'   => env('DB_CONNECTION'),
            'host'     => env('DB_HOST'),
            'port'     => env('DB_PORT'),
            'username' => env('DB_USERNAME'),
            'password' => env('DB_PASSWORD'),
            'database' => env('DB_DATABASE'),
            'jdbc_dir' => base_path() . env('JDBC_DIR', '/vendor/lavela/phpjasper/src/JasperStarter/jdbc'),
        ];
    }
    public function index()
    {
        $output = public_path() . '/reports/' . time() . '_Clientes';
        $report = new JasperPHP;        
        $report->process(
            public_path() . '/reports/test.jrxml',
            $output,
            ['pdf'],
            [],
            $this->getDatabaseConfig()
        )->execute();
        $file = $output . '.pdf';
        $path = $file;
        if (!file_exists($file)) {
            abort(404);
        }
        $file = file_get_contents($file);
        unlink($path);
        return response($file, 200)
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', 'inline; filename="test.pdf"');
    }
}