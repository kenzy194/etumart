<?php 
	
    $t = kaily_get_opt('coin_car', false);

	$ts = 'USD';
?>
<div class="cshcr-caroulse-wrap">
    <div class="cshcr-caroulse-layout"
         data-time="10"
         data-fsym="<?php echo str_replace( ' ', '', esc_attr( $t ) ) ?>"
         data-tsyms="<?php echo str_replace( ' ', '', esc_attr( $ts ) ) ?>">
		<?php
		$data = json_decode( cshcr_get_file_contents( 'https://min-api.cryptocompare.com/data/pricemultifull?fsyms=' . str_replace( ' ', '',$t) . '&tsyms=' . $ts ), true );
		if ( ! empty( $data['RAW'] ) ) {
			?>

		<div class="carouselTicker" id="carouselTicker">
				<ul class="carouselTicker__list clearfix">
				<?php
				foreach ( $data['RAW'] as $fsb => $values ) {
					$c_info = cshcr_get_coin_info_by_id( $fsb );
					?>
					<li class="carouselTicker__item">
						<div class="coin_info">
							<div class="coin_name">
								<?php echo $c_info['coin_name'] ?>
			                	<span class="update_change_minus"><?php echo $values[$ts]['CHANGE24HOUR'] >= 0 ? '+' . number_format($values[$ts]['CHANGE24HOUR'],2) : number_format($values[$ts]['CHANGE24HOUR'],2) ?></span>
							</div>
							<div class="coin_price">
			                <?php echo str_replace(' ','',$data['DISPLAY'][$fsb][$ts]['PRICE']) ?>
			                <span class="scsl__change_minus"><?php echo $values[$ts]['CHANGEPCT24HOUR'] >= 0 ? '+' . number_format($values[$ts]['CHANGEPCT24HOUR'],2).'%' : number_format($values[$ts]['CHANGEPCT24HOUR'],2).'%' ?></span>
			                </div>
			                <div class="coin_time">
                                <?php
                                ?>
				                <?php echo $data['DISPLAY'][$fsb][$ts]['TOSYMBOL'].$values[$ts]['MKTCAP'] ?>
                            </div>
		                </div>
	                </li>
					<?php
				}
				?>
				</ul>
				<?php
			}
			?>
	    </div>
	</div>
</div>