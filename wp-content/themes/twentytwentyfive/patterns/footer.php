<?php
/**
 * Title: Footer
 * Slug: twentytwentyfive/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Skye Digital Marketing Corporate Agency Footer
 */
$logo_url = home_url( '/wp-content/uploads/skye-nav-logo.jpg' );
$home_url = home_url( '/' );
?>
<!-- wp:html -->
<footer class="skye-footer">
	<div class="skye-footer-inner">
		<div class="skye-footer-grid">
			<!-- Col 1: About Agency -->
			<div class="skye-footer-col skye-footer-about">
				<div class="skye-brand">
					<a href="<?php echo esc_url( $home_url ); ?>" class="skye-logo-link">
						<img src="<?php echo esc_url( $logo_url ); ?>" alt="Skye Digital Marketing" class="skye-logo-img" />
						<div class="skye-brand-text">
							<span class="skye-brand-title">SKYE <span class="skye-cyan-text">DIGITAL</span></span>
							<span class="skye-brand-sub">PERFORMANCE MARKETING</span>
						</div>
					</a>
				</div>
				<p class="skye-footer-desc">
					Skye Digital Marketing is a premier performance advertising agency engineering high-ROAS multi-channel campaigns, conversion architecture, and predictable customer acquisition for high-growth global enterprises.
				</p>
				<div class="skye-trust-metrics">
					<div class="skye-metric-item">
						<strong>$25M+</strong>
						<span>Managed Ad Spend</span>
					</div>
					<div class="skye-metric-item">
						<strong>4.8x</strong>
						<span>Average Blended ROAS</span>
					</div>
				</div>
			</div>

			<!-- Col 2: Services -->
			<div class="skye-footer-col">
				<h4 class="skye-footer-heading">Agency Services</h4>
				<ul class="skye-footer-links">
					<li><a href="<?php echo esc_url( $home_url . 'category/paid-media/' ); ?>">Meta &amp; Instagram Ads Scaling</a></li>
					<li><a href="<?php echo esc_url( $home_url . 'category/performance-marketing/' ); ?>">Google Search &amp; Performance Max</a></li>
					<li><a href="<?php echo esc_url( $home_url . 'category/conversion-optimization/' ); ?>">Conversion Rate Optimization (CRO)</a></li>
					<li><a href="<?php echo esc_url( $home_url . 'category/analytics-growth/' ); ?>">Server-Side Tracking &amp; Attribution</a></li>
					<li><a href="<?php echo esc_url( $home_url . 'category/paid-media/' ); ?>">Dynamic Creative Testing (DCT)</a></li>
				</ul>
			</div>

			<!-- Col 3: Company & Trust -->
			<div class="skye-footer-col">
				<h4 class="skye-footer-heading">Company &amp; Legal</h4>
				<ul class="skye-footer-links">
					<li><a href="<?php echo esc_url( $home_url . 'about-us/' ); ?>">About Skye Agency</a></li>
					<li><a href="<?php echo esc_url( $home_url . 'contact-us/' ); ?>">Book a Growth Audit</a></li>
					<li><a href="<?php echo esc_url( $home_url . 'privacy-policy/' ); ?>">Privacy Policy</a></li>
					<li><a href="<?php echo esc_url( $home_url . 'terms-of-service/' ); ?>">Terms of Service</a></li>
					<li><a href="<?php echo esc_url( $home_url . 'disclaimer/' ); ?>">Client Performance Disclaimer</a></li>
				</ul>
			</div>

			<!-- Col 4: Newsletter -->
			<div class="skye-footer-col skye-footer-newsletter">
				<h4 class="skye-footer-heading">Executive Ad Intel</h4>
				<p class="skye-newsletter-desc">Receive bi-weekly teardowns of high-performing ad creatives, algorithm changes, and media buying frameworks.</p>
				<form class="skye-newsletter-form" onsubmit="event.preventDefault(); alert('Subscribed to Skye Executive Ad Intel!');">
					<input type="email" placeholder="Corporate email address..." required class="skye-newsletter-input" />
					<button type="submit" class="skye-newsletter-btn">Request Growth Brief</button>
				</form>
				<span class="skye-ssl-badge">🔒 256-Bit SSL Secured • Confidential</span>
			</div>
		</div>

		<!-- Footer Bottom -->
		<div class="skye-footer-bottom">
			<p>&copy; <?php echo date( 'Y' ); ?> Skye Digital Marketing LLC. All rights reserved.</p>
			<div class="skye-trust-tags">
				<span>🏆 Google Premier Partner</span>
				<span>⚡ Meta Certified Media Buyer</span>
				<span>🔒 SOC-2 Compliant</span>
			</div>
		</div>
	</div>
</footer>
<!-- /wp:html -->