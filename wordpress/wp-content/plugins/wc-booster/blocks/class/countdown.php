<?php
if (! class_exists('WC_Booster_Countdown_Block')) {

	class WC_Booster_Countdown_Block extends WC_Booster_Base_Block
	{

		public $slug = 'countdown';

		/**
		 * Title of this block.
		 *
		 * @access public
		 * @since 1.0.0
		 * @var string
		 */
		public $title = 'Countdown';

		/**
		 * Description of this block.
		 *
		 * @access public
		 * @since 1.0.0
		 * @var string
		 */
		public $description = 'The Countdown block highlights key features, designed for use on the product sale expiry date';

		/**
		 * SVG Icon for this block.
		 *
		 * @access public
		 * @since 1.0.0
		 * @var string
		 */
		public $icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120l0 136c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2 280 120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/></svg>';

		protected static $instance;

		public static function get_instance()
		{
			if (null === self::$instance) {
				self::$instance = new self();
			}
			return self::$instance;
		}

		public function prepare_scripts()
		{
			foreach ($this->blocks as $block) {
				$attrs = self::get_attrs_with_default($block['attrs']);

				if (in_array($attrs['block_id'], $this->block_ids)) {
					continue;
				}

				$this->block_ids[] = $attrs['block_id'];

				$number_typo = self::get_initial_responsive_props();
				if (isset($attrs['numberTypo'])) {
					$number_typo = self::get_typography_props($attrs['numberTypo']);
				}

				$label_typo = self::get_initial_responsive_props();
				if (isset($attrs['labelTypo'])) {
					$label_typo = self::get_typography_props($attrs['labelTypo']);
				}

				$box_height = self::get_initial_responsive_props();
				if (isset($attrs['boxHeight']['units']) && is_array($attrs['boxHeight']['units'])) {
					foreach ($attrs['boxHeight']['units'] as $unit) {
					}
				} 

				$box_width = self::get_initial_responsive_props();
				if (isset($attrs['boxWidth']['units']) && is_array($attrs['boxWidth']['units'])) {
					foreach ($attrs['boxWidth']['units'] as $unit) {
					}
				}

				$padding     = self::get_dimension_props('padding', $attrs['padding']);
				$margin     = self::get_dimension_props('margin', $attrs['margin']);

				foreach (self::$devices as $device) {
					$styles = [
						[
							'selector' => '.wc-booster-countdown-wrapper',
							'props' => $padding[$device]
						],
						[
							'selector' => '.wc-booster-countdown-wrapper',
							'props' => $margin[$device]
						],
						[
							'selector' => '.countdown-item',
							'props' => $box_height[$device]
						],
						[
							'selector' => '.countdown-item',
							'props' => $box_width[$device]
						],
						[
							'selector' => '.countdown-number',
							'props' => $number_typo[$device]
						],
						[
							'selector' => '.countdown-label',
							'props' => $label_typo[$device]
						]
					];
					self::add_styles([
						'attrs' => $attrs,
						'css'   => $styles,
					], $device);
				}

				$dynamic_css = [
					[
						'selector' => '.wc-booster-countdown-wrapper',
						'props' => [
							'display' => 'flex',
							'gap' => '${gap}px'
						]
					],
					[
						'selector' => '.countdown-item',
						'props' => [
							'border-radius' => 'boxRadius'
						]
					],
					[
						'selector' => '.countdown-number',
						'props' => [
							'color' => 'numColor'
						]
					],
					[
						'selector' => '.countdown-label',
						'props' => [
							'color' => 'labelColor'
						]
					],
					[
						'selector' => '.countdown-item',
						'props' => [
							'background-color' => 'bgColor'
						]
					]
				];
				self::add_styles([
					'attrs' => $attrs,
					'css' => $dynamic_css
				]);
			}
		}

		public function render($attrs, $content, $block)
		{
			$target_date = isset($attrs['targetDate']) ? $attrs['targetDate'] : '2024-11-10T00:00:00';

			$gap = isset($attrs['gap']) ? intval($attrs['gap']) : 0;

			$boxWidth = isset($attrs['boxWidth']['values']['desktop']) ? intval($attrs['boxWidth']['values']['desktop']) : 0;
			$boxHeight = isset($attrs['boxHeight']['values']['desktop']) ? intval($attrs['boxHeight']['values']['desktop']) : 0;

			$block_content = '';
			ob_start();
?>
			<div id="<?php echo esc_attr($attrs['block_id']); ?>" class="wc-booster-countdown-block <?php echo esc_attr( $attrs['alignment'] )?>" data-target-date="<?php echo esc_attr($target_date); ?>">
				<div class="expired-message" style="display: none;">
					<?php esc_html_e('Sale Expired!!!', 'wc-booster'); ?>
				</div>
				<div class="wc-booster-countdown-wrapper" style="display: flex; gap: <?php echo esc_attr($gap); ?>px;">
					<div class="countdown-item" style="width: <?php echo esc_attr($boxWidth); ?>px; height: <?php echo esc_attr($boxHeight); ?>px;">
						<span class="countdown-number" data-time="days">0</span>
						<span class="countdown-label">Days</span>
					</div>
					<div class="countdown-item" style="width: <?php echo esc_attr($boxWidth); ?>px; height: <?php echo esc_attr($boxHeight); ?>px;">
						<span class="countdown-number" data-time="hours">0</span>
						<span class="countdown-label">Hours</span>
					</div>
					<div class="countdown-item" style="width: <?php echo esc_attr($boxWidth); ?>px; height: <?php echo esc_attr($boxHeight); ?>px;">
						<span class="countdown-number" data-time="minutes">0</span>
						<span class="countdown-label">Min</span>
					</div>
					<div class="countdown-item" style="width: <?php echo esc_attr($boxWidth); ?>px; height: <?php echo esc_attr($boxHeight); ?>px;">
						<span class="countdown-number" data-time="seconds">0</span>
						<span class="countdown-label">Sec</span>
					</div>
				</div>
			</div>
<?php
			$block_content = ob_get_clean();
			return $block_content;
		}
	}

	WC_Booster_Countdown_Block::get_instance();
}
