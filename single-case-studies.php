<?php get_header(); ?>

<?php
$page_intro = get_field('page_intro');
pageIntroComponent($page_intro, 'page-intro--single-case');
?>

<div class="container">
  <?php get_template_part('template-parts/single-case-studies/preview'); ?>
  <div class="overview">
    <h2 class="overview__title title">Project Overview</h2>
    <div class="overview__text text">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
    </div>
    <ul class="overview__list">
      <li class="overview__item">It brings the right people together with all the right information and tools to get work done</li>
      <li class="overview__item">We provide operational efficiency, data security, and flexible scale</li>
      <li class="overview__item">Your best work, together in one package that works seamlessly from your computer</li>
      <li class="overview__item">Delivers the tools you need to save time Improve field performance always</li>
    </ul>
    <h3 class="overview__subtitle">Storyboard</h3>
    <div class="overview__text text">
      <p>Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate resource-leveling customer service for state of the art customer service. Objectively innovate empowered manufactured products whereas parallel platforms. Holistically predominate extensible testing procedures for reliable supply chains.</p>
      <p>Proactively envisioned multimedia based expertise and cross-media growth strategies. Seamlessly visualize quality intellectual capital without superior collaboration and idea-sharing. Holistically pontificate installed base portals after maintainable products completely pursue scalable customer service.</p>
    </div>
    <div class="overview__img"><img src="assets/i/overview/overview-img.jpg" alt=""></div>
    <h3 class="overview__subtitle">Project result</h3>
    <div class="overview__text text">
      <p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</p>
      <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring. </p>
    </div>
  </div>
  <?php get_template_part('template-parts/single-team/subscribe'); ?>
  <?php get_template_part('template-parts/single-case-studies/case-gallery'); ?>
</div>

<?php get_footer(); ?>