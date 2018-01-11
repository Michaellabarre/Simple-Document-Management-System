<div class="ui  black segment" id="ppmpform"  style="overflow-x:auto;">
	<table id="table1" class="ui celled table">
	    <thead>
	        <tr>

	            <th>Code</th>
	            <th>General Description</th>
	            <th>Quantity</th>
	            <th>Estimated Budget</th>
				<th>Jan</th>
	        	<th>Feb</th>
	            <th>Mar</th>
	            <th>Apr</th>
	            <th>May</th>
	            <th>June</th>
	            <th>July</th>
	            <th>Aug</th>
	            <th>Sept</th>
	            <th>Oct</th>
	            <th>Nov</th>
	            <th>Dec</th>			            
	        </tr>
	    </thead>
	    <tbody>
	        <tr v-for="product in form.products" >
	       		<td>
					{{product.code}}
	            </td>
	            <td style="max-width: 350px; word-wrap:break-word;">
					{{product.generaldescription}}
	            </td>
	            <td>
					{{product.quantity}}
	            </td>
				<td>
					{{product.estimated_budget}}
	            </td>

	           	<!-- Start january Color -->
	            <td v-if="product.jan == 1" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/White.png')); ?>' + ')'}"></td>
	            <td v-if="product.jan == 2" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/green.png')); ?>' + ')'}"></td>
	            <td v-if="product.jan == 3" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/Yellow.png')); ?>' + ')'}"></td>
	            <td v-if="product.jan == 4" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/Blue.png')); ?>' + ')'}"></td>
	            <td v-if="product.jan == 5" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/red.png')); ?>' + ')'}"></td>
	            <td v-if="product.jan == 6" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/GreenYellow.png')); ?>' + ')'}"></td>
	            <td v-if="product.jan == 7" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/YellowBlue.png')); ?>' + ')'}"></td>
	            <td v-if="product.jan == 8" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/BlueRed.png')); ?>' + ')'}"></td>
	           	<!-- End january Color -->

	           	<!-- Start Feb Color -->
        		<td v-if="product.feb == 1" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/White.png')); ?>' + ')'}"></td>
	            <td v-if="product.feb == 2" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/green.png')); ?>' + ')'}"></td>
	            <td v-if="product.feb == 3" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/Yellow.png')); ?>' + ')'}"></td>
	            <td v-if="product.feb == 4" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/Blue.png')); ?>' + ')'}"></td>
	            <td v-if="product.feb == 5" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/red.png')); ?>' + ')'}"></td>
	            <td v-if="product.feb == 6" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/GreenYellow.png')); ?>' + ')'}"></td>
	            <td v-if="product.feb == 7" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/YellowBlue.png')); ?>' + ')'}"></td>
	            <td v-if="product.feb == 8" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/BlueRed.png')); ?>' + ')'}"></td>
	           	<!-- End Feb Color -->

	           	<!-- Start mar Color -->
        		<td v-if="product.mar == 1" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/White.png')); ?>' + ')'}"></td>
	            <td v-if="product.mar == 2" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/green.png')); ?>' + ')'}"></td>
	            <td v-if="product.mar == 3" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/Yellow.png')); ?>' + ')'}"></td>
	            <td v-if="product.mar == 4" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/Blue.png')); ?>' + ')'}"></td>
	            <td v-if="product.mar == 5" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/red.png')); ?>' + ')'}"></td>
	            <td v-if="product.mar == 6" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/GreenYellow.png')); ?>' + ')'}"></td>
	            <td v-if="product.mar == 7" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/YellowBlue.png')); ?>' + ')'}"></td>
	            <td v-if="product.mar == 8" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/BlueRed.png')); ?>' + ')'}"></td>
	           	<!-- End mar Color -->

	           	<!-- Start apr Color -->
        		<td v-if="product.apr == 1" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/White.png')); ?>' + ')'}"></td>
	            <td v-if="product.apr == 2" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/green.png')); ?>' + ')'}"></td>
	            <td v-if="product.apr == 3" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/Yellow.png')); ?>' + ')'}"></td>
	            <td v-if="product.apr == 4" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/Blue.png')); ?>' + ')'}"></td>
	            <td v-if="product.apr == 5" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/red.png')); ?>' + ')'}"></td>
	            <td v-if="product.apr == 6" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/GreenYellow.png')); ?>' + ')'}"></td>
	            <td v-if="product.apr == 7" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/YellowBlue.png')); ?>' + ')'}"></td>
	            <td v-if="product.apr == 8" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/BlueRed.png')); ?>' + ')'}"></td>
	           	<!-- End apr Color -->
	           	<!-- Start may Color -->
        		<td v-if="product.may == 1" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/White.png')); ?>' + ')'}"></td>
	            <td v-if="product.may == 2" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/green.png')); ?>' + ')'}"></td>
	            <td v-if="product.may == 3" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/Yellow.png')); ?>' + ')'}"></td>
	            <td v-if="product.may == 4" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/Blue.png')); ?>' + ')'}"></td>
	            <td v-if="product.may == 5" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/red.png')); ?>' + ')'}"></td>
	            <td v-if="product.may == 6" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/GreenYellow.png')); ?>' + ')'}"></td>
	            <td v-if="product.may == 7" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/YellowBlue.png')); ?>' + ')'}"></td>
	            <td v-if="product.may == 8" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/BlueRed.png')); ?>' + ')'}"></td>
	           	<!-- End may Color -->
	           	<!-- Start june Color -->
        		<td v-if="product.june == 1" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/White.png')); ?>' + ')'}"></td>
	            <td v-if="product.june == 2" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/green.png')); ?>' + ')'}"></td>
	            <td v-if="product.june == 3" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/Yellow.png')); ?>' + ')'}"></td>
	            <td v-if="product.june == 4" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/Blue.png')); ?>' + ')'}"></td>
	            <td v-if="product.june == 5" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/red.png')); ?>' + ')'}"></td>
	            <td v-if="product.june == 6" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/GreenYellow.png')); ?>' + ')'}"></td>
	            <td v-if="product.june == 7" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/YellowBlue.png')); ?>' + ')'}"></td>
	            <td v-if="product.june == 8" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/BlueRed.png')); ?>' + ')'}"></td>
	           	<!-- End june Color -->
	           	<!-- Start july Color -->
        		<td v-if="product.july == 1" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/White.png')); ?>' + ')'}"></td>
	            <td v-if="product.july == 2" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/green.png')); ?>' + ')'}"></td>
	            <td v-if="product.july == 3" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/Yellow.png')); ?>' + ')'}"></td>
	            <td v-if="product.july == 4" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/Blue.png')); ?>' + ')'}"></td>
	            <td v-if="product.july == 5" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/red.png')); ?>' + ')'}"></td>
	            <td v-if="product.july == 6" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/GreenYellow.png')); ?>' + ')'}"></td>
	            <td v-if="product.july == 7" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/YellowBlue.png')); ?>' + ')'}"></td>
	            <td v-if="product.july == 8" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/BlueRed.png')); ?>' + ')'}"></td>
	           	<!-- End june Color -->
	           	<!-- Start aug Color -->
        		<td v-if="product.aug == 1" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/White.png')); ?>' + ')'}"></td>
	            <td v-if="product.aug == 2" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/green.png')); ?>' + ')'}"></td>
	            <td v-if="product.aug == 3" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/Yellow.png')); ?>' + ')'}"></td>
	            <td v-if="product.aug == 4" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/Blue.png')); ?>' + ')'}"></td>
	            <td v-if="product.aug == 5" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/red.png')); ?>' + ')'}"></td>
	            <td v-if="product.aug == 6" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/GreenYellow.png')); ?>' + ')'}"></td>
	            <td v-if="product.aug == 7" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/YellowBlue.png')); ?>' + ')'}"></td>
	            <td v-if="product.aug == 8" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/BlueRed.png')); ?>' + ')'}"></td>
	           	<!-- End aug Color -->
	           	<!-- Start sept Color -->
        		<td v-if="product.sept == 1" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/White.png')); ?>' + ')'}"></td>
	            <td v-if="product.sept == 2" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/green.png')); ?>' + ')'}"></td>
	            <td v-if="product.sept == 3" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/Yellow.png')); ?>' + ')'}"></td>
	            <td v-if="product.sept == 4" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/Blue.png')); ?>' + ')'}"></td>
	            <td v-if="product.sept == 5" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/red.png')); ?>' + ')'}"></td>
	            <td v-if="product.sept == 6" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/GreenYellow.png')); ?>' + ')'}"></td>
	            <td v-if="product.sept == 7" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/YellowBlue.png')); ?>' + ')'}"></td>
	            <td v-if="product.sept == 8" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/BlueRed.png')); ?>' + ')'}"></td>
	           	<!-- End sept Color -->
	           	<!-- Start oct Color -->
        		<td v-if="product.oct == 1" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/White.png')); ?>' + ')'}"></td>
	            <td v-if="product.oct == 2" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/green.png')); ?>' + ')'}"></td>
	            <td v-if="product.oct == 3" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/Yellow.png')); ?>' + ')'}"></td>
	            <td v-if="product.oct == 4" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/Blue.png')); ?>' + ')'}"></td>
	            <td v-if="product.oct == 5" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/red.png')); ?>' + ')'}"></td>
	            <td v-if="product.oct == 6" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/GreenYellow.png')); ?>' + ')'}"></td>
	            <td v-if="product.oct == 7" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/YellowBlue.png')); ?>' + ')'}"></td>
	            <td v-if="product.oct == 8" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/BlueRed.png')); ?>' + ')'}"></td>
	           	<!-- End oct Color -->
	           	<!-- Start nov Color -->
        		<td v-if="product.nov == 1" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/White.png')); ?>' + ')'}"></td>
	            <td v-if="product.nov == 2" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/green.png')); ?>' + ')'}"></td>
	            <td v-if="product.nov == 3" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/Yellow.png')); ?>' + ')'}"></td>
	            <td v-if="product.nov == 4" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/Blue.png')); ?>' + ')'}"></td>
	            <td v-if="product.nov == 5" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/red.png')); ?>' + ')'}"></td>
	            <td v-if="product.nov == 6" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/GreenYellow.png')); ?>' + ')'}"></td>
	            <td v-if="product.nov == 7" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/YellowBlue.png')); ?>' + ')'}"></td>
	            <td v-if="product.nov == 8" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/BlueRed.png')); ?>' + ')'}"></td>
	           	<!-- End nov Color -->
	           	<!-- Start dec Color -->
        		<td v-if="product.dec == 1" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/White.png')); ?>' + ')'}"></td>
	            <td v-if="product.dec == 2" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/green.png')); ?>' + ')'}"></td>
	            <td v-if="product.dec == 3" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/Yellow.png')); ?>' + ')'}"></td>
	            <td v-if="product.dec == 4" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/Blue.png')); ?>' + ')'}"></td>
	            <td v-if="product.dec == 5" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/red.png')); ?>' + ')'}"></td>
	            <td v-if="product.dec == 6" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/GreenYellow.png')); ?>' + ')'}"></td>
	            <td v-if="product.dec == 7" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/YellowBlue.png')); ?>' + ')'}"></td>
	            <td v-if="product.dec == 8" v-bind:style="{ backgroundImage: 'url(' + '<?php echo e(asset('img/colorcoding/BlueRed.png')); ?>' + ')'}"></td>
	           	<!-- End oct Color -->

	        </tr>
	    </tbody>
	</table>

</div>
