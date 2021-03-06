<?php do_action('eldritch_edge_before_sticky_header'); ?>

	<div class="edgt-sticky-header">
		<?php do_action('eldritch_edge_after_sticky_menu_html_open'); ?>
		<div class="edgt-sticky-holder">
			<?php if($sticky_header_in_grid) : ?>
			<div class="edgt-grid">
				<?php endif; ?>
				<div class=" edgt-vertical-align-containers">
					<div class="edgt-position-left">
						<div class="edgt-position-left-inner">
							<?php if(!$hide_logo) {
								eldritch_edge_get_logo('sticky');
							} ?>
						</div>
					</div>
					<div class="edgt-position-right">
						<div class="edgt-position-right-inner">
                            <a href="javascript:void(0)" class="edgt-fullscreen-menu-opener">
                                <span class="edgt-fullscreen-menu-opener-icon">
                                    <span class="edgt-fsm-first-line"></span>
                                    <span class="edgt-fsm-second-line"></span>
                                    <span class="edgt-fsm-third-line"></span>
                                </span>
                            </a>
						</div>
					</div>
				</div>
				<?php if($sticky_header_in_grid) : ?>
			</div>
		<?php endif; ?>
		</div>
	</div>

<?php do_action('eldritch_edge_after_sticky_header'); ?>