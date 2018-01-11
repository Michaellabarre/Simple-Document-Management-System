@if ($paginator->lastPage() > 1)
<div class="ui right floated pagination menu">
	<a class="{{ ($paginator->currentPage() == 1) ? 'disabled icon item' : 'icon item' }}" href="{{ $paginator->url($paginator->currentPage() - 1) }}">
		<i class="left chevron icon"></i>
	</a>
	@for ($i = 1; $i <= $paginator->lastPage(); $i++)
	@if($i <= 5)
	<a href="{{ $paginator->url($i) }}" class="{{ ($paginator->currentPage() == $i) ? 'active item' : 'item' }}">
		{{ $i }}
	</a>
	@endif
	@endfor
	<a class="{{ ($paginator->lastPage() == $paginator->currentPage()) ? 'disabled icon item' : 'icon item' }}" href="{{ $paginator->url($paginator->currentPage() + 1) }}">
		<i class="right chevron icon"></i>
	</a>
</div>
@endif