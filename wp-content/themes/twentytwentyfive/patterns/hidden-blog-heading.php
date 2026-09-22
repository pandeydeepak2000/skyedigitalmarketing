<?php
/**
 * Title: Hidden blog heading
 * Slug: twentytwentyfive/hidden-blog-heading
 * Description: Skye Digital Marketing Agency Hero Banner
 * Inserter: no
 */
$home_url = home_url( '/' );
?>
<!-- wp:html -->
<section class="skye-hero-section">
	<div class="skye-hero-glow"></div>
	<div class="skye-hero-content">
		<div class="skye-hero-badge">
			<span class="skye-badge-icon">⚡</span>
			<span>PERFORMANCE • SCALE • ROAS</span>
		</div>
		<h1 class="skye-hero-title">
			Enterprise Performance Marketing &amp; <span class="skye-cyan-text">Data-Driven Acquisition</span>
		</h1>
		<p class="skye-hero-subtitle">
			We scale high-growth brands through high-converting paid media, multi-channel funnels, conversion rate optimization, and predictable customer lifetime value.
		</p>
		<div class="skye-hero-tags">
			<a href="<?php echo esc_url( $home_url . 'category/paid-media/' ); ?>" class="skye-pill">#PerformanceMarketing</a>
			<a href="<?php echo esc_url( $home_url . 'category/performance-marketing/' ); ?>" class="skye-pill">#MetaAds</a>
			<a href="<?php echo esc_url( $home_url . 'category/performance-marketing/' ); ?>" class="skye-pill">#GooglePPC</a>
			<a href="<?php echo esc_url( $home_url . 'category/conversion-optimization/' ); ?>" class="skye-pill">#ROASScaling</a>
			<a href="<?php echo esc_url( $home_url . 'category/conversion-optimization/' ); ?>" class="skye-pill">#CROFunnels</a>
			<a href="<?php echo esc_url( $home_url . 'category/analytics-growth/' ); ?>" class="skye-pill">#Attribution</a>
		</div>
	</div>
</section>

<div class="skye-section-header">
	<div class="skye-section-title-wrap">
		<span class="skye-section-bar"></span>
		<h2 class="skye-section-title">Agency Case Studies &amp; Strategic Insights</h2>
		<span class="skye-badge-count"><?php echo (int) wp_count_posts()->publish; ?> Case Studies</span>
	</div>
</div>
<!-- /wp:html -->