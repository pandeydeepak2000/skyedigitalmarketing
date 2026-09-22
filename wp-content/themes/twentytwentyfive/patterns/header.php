<?php
/**
 * Title: Header
 * Slug: twentytwentyfive/header
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Skye Digital Marketing High-Tech Agency Header
 */
$logo_url = home_url( '/wp-content/uploads/skye-nav-logo.jpg' );
$home_url = home_url( '/' );
?>
<!-- wp:html -->
<header class="skye-header">
	<div class="skye-header-inner">
		<div class="skye-brand">
			<a href="<?php echo esc_url( $home_url ); ?>" class="skye-logo-link" title="Skye Digital Marketing - Enterprise Growth Agency">
				<img src="<?php echo esc_url( $logo_url ); ?>" alt="Skye Digital Marketing" class="skye-logo-img" />
				<div class="skye-brand-text">
					<span class="skye-brand-title">SKYE <span class="skye-cyan-text">DIGITAL</span></span>
					<span class="skye-brand-sub">PERFORMANCE MARKETING</span>
				</div>
			</a>
		</div>

		<nav class="skye-nav" aria-label="Main Navigation">
			<ul class="skye-nav-list">
				<li><a href="<?php echo esc_url( $home_url ); ?>" class="skye-nav-item active">Home</a></li>
				<li><a href="<?php echo esc_url( $home_url . 'category/paid-media/' ); ?>" class="skye-nav-item">Performance Ads</a></li>
				<li><a href="<?php echo esc_url( $home_url . 'category/performance-marketing/' ); ?>" class="skye-nav-item">PPC &amp; Search</a></li>
				<li><a href="<?php echo esc_url( $home_url . 'category/conversion-optimization/' ); ?>" class="skye-nav-item">ROAS Funnels</a></li>
				<li><a href="<?php echo esc_url( $home_url . 'category/analytics-growth/' ); ?>" class="skye-nav-item">CRO &amp; Analytics</a></li>
			</ul>
		</nav>

		<div class="skye-header-actions">
			<a href="<?php echo esc_url( $home_url . 'meta-google-ads-scaling-cpa-reduction-playbook-2024/' ); ?>" class="skye-btn-cta">
				<span>Growth Audit</span> 🚀
			</a>
			<button class="skye-mobile-toggle" aria-label="Toggle navigation" onclick="document.querySelector('.skye-header').classList.toggle('skye-mobile-open')">
				<span class="skye-bar"></span>
				<span class="skye-bar"></span>
				<span class="skye-bar"></span>
			</button>
		</div>
	</div>
</header>
<!-- /wp:html -->