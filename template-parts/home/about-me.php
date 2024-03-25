<?php
$about_me = get_field('about_me');
$label = $about_me['label'];
$title = $about_me['title'];
$text = $about_me['text'];
$email = $about_me['email'];
$phone = $about_me['phone'];
$button_text = $about_me['button_text'];
$image = $about_me['image'];
$quantity = $about_me['quantity'];
$description = $about_me['description'];
?>
<div class="about-me">
  <div class="about-me__wrapper">
    <div class="about-me__picture">
      <img src="<?php echo $image; ?>" alt="">
      <div class="about-me__circle about-me__circle--yellow"></div>
      <div class="about-me__circle about-me__circle--green"></div>
      <div class="about-me__clients">
        <svg width="73" height="53" viewBox="0 0 73 53" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M36.6599 40.3272C43.1071 40.3272 48.3335 35.1007 48.3335 28.6536C48.3335 22.2064 43.1071 16.98 36.6599 16.98C30.2128 16.98 24.9863 22.2064 24.9863 28.6536C24.9863 35.1007 30.2128 40.3272 36.6599 40.3272Z" stroke="#141414" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path>
          <path d="M56.5049 21.6497C59.2241 21.6451 61.9067 22.2761 64.3389 23.4921C66.771 24.7082 68.8853 26.4757 70.5132 28.6538" stroke="#141414" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path>
          <path d="M2.80664 28.6538C4.43452 26.4757 6.54884 24.7082 8.98097 23.4921C11.4131 22.2761 14.0958 21.6451 16.815 21.6497" stroke="#141414" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path>
          <path d="M19.8496 50.834C21.3871 47.6853 23.778 45.0317 26.75 43.1755C29.722 41.3193 33.1556 40.3352 36.6596 40.3352C40.1636 40.3352 43.5972 41.3193 46.5692 43.1755C49.5412 45.0317 51.9321 47.6853 53.4696 50.834" stroke="#141414" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path>
          <path d="M16.8152 21.6499C15.0426 21.6517 13.3062 21.149 11.8088 20.2006C10.3113 19.2522 9.11473 17.8972 8.35876 16.294C7.60279 14.6908 7.31869 12.9056 7.53965 11.1469C7.76061 9.38818 8.4775 7.72869 9.60657 6.36231C10.7356 4.99592 12.2302 3.97907 13.9158 3.43056C15.6013 2.88206 17.4081 2.82455 19.125 3.26477C20.842 3.70498 22.3983 4.62473 23.6119 5.91656C24.8256 7.20838 25.6466 8.81892 25.9789 10.56" stroke="#141414" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path>
          <path d="M47.3408 10.56C47.6732 8.81892 48.4941 7.20838 49.7078 5.91656C50.9215 4.62473 52.4777 3.70498 54.1947 3.26477C55.9117 2.82455 57.7185 2.88206 59.404 3.43056C61.0895 3.97907 62.5841 4.99592 63.7132 6.36231C64.8422 7.72869 65.5591 9.38818 65.7801 11.1469C66.0011 12.9056 65.7169 14.6908 64.961 16.294C64.205 17.8972 63.0084 19.2522 61.511 20.2006C60.0135 21.149 58.2771 21.6517 56.5046 21.6499" stroke="#141414" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
        <div class="about-me__block">
          <div class="about-me__quantity"><?php echo $quantity; ?></div>
          <div class="about-me__description"><?php echo $description; ?></div>
        </div>
      </div>
    </div>
    <div class="about-me__content">
      <div class="about-me__label label"><?php echo $label; ?></div>
      <h2 class="about-me__title title"><?php echo $title; ?></h2>
      <div class="about-me__text text">
        <?php echo $text; ?>
      </div>
      <div class="about-me__email">
        <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="23.1042" cy="23.194" r="22.5163" fill="#FFF3D6"></circle>
          <path d="M32.3242 16.8718L23.3994 25.0529L14.4746 16.8718" stroke="#C7981F" stroke-linecap="round" stroke-linejoin="round"></path>
          <path d="M14.4746 16.8718H32.3242V29.5153C32.3242 29.7125 32.2459 29.9017 32.1064 30.0412C31.9669 30.1807 31.7777 30.259 31.5805 30.259H15.2183C15.0211 30.259 14.8319 30.1807 14.6924 30.0412C14.553 29.9017 14.4746 29.7125 14.4746 29.5153V16.8718Z" stroke="#C7981F" stroke-linecap="round" stroke-linejoin="round"></path>
          <path d="M21.7725 23.5654L14.707 30.0452" stroke="#C7981F" stroke-linecap="round" stroke-linejoin="round"></path>
          <path d="M32.0918 30.0452L25.0264 23.5654" stroke="#C7981F" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
        <a href="mailto:Buschemia@gmailcom" target="_blank"><?php echo $email; ?></a>
      </div>
      <div class="about-me__phone">
        <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="21.8213" cy="21.7676" r="21.7676" fill="#E2F4E2" stroke="none"></circle>
          <path d="M18.9586 22.054C19.7098 23.6053 20.9641 24.8564 22.5173 25.6036C22.6319 25.6579 22.7586 25.6814 22.885 25.6718C23.0114 25.6622 23.1331 25.6198 23.2382 25.5489L25.5194 24.025C25.6202 23.9567 25.7367 23.9149 25.8579 23.9038C25.9792 23.8926 26.1013 23.9123 26.2129 23.9611L30.4834 25.7953C30.6293 25.856 30.7513 25.963 30.8304 26.0999C30.9096 26.2368 30.9415 26.3958 30.9214 26.5526C30.786 27.6091 30.2704 28.58 29.4709 29.2837C28.6715 29.9874 27.643 30.3757 26.5779 30.376C23.2866 30.376 20.1301 29.0685 17.8028 26.7412C15.4754 24.4139 14.168 21.2574 14.168 17.9661C14.1682 16.901 14.5565 15.8725 15.2602 15.073C15.964 14.2736 16.9349 13.7579 17.9913 13.6226C18.1481 13.6024 18.3072 13.6344 18.4441 13.7135C18.5809 13.7927 18.6879 13.9146 18.7487 14.0606L20.5828 18.3402C20.6305 18.45 20.6505 18.5699 20.6409 18.6892C20.6314 18.8085 20.5926 18.9237 20.5281 19.0245L19.0042 21.3423C18.9363 21.4471 18.8965 21.5676 18.8885 21.6922C18.8806 21.8168 18.9047 21.9414 18.9586 22.054V22.054Z" stroke="#37A437" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
        <a href="tel:00156486584" target="_blank"><?php echo $phone; ?></a>
      </div>
      <a class="about-me__btn btn btn--dark" href="#"><?php echo $button_text; ?></a>
    </div>
  </div>
</div>