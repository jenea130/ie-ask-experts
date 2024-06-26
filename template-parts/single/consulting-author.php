<?php
$term = get_the_terms(get_the_ID(), 'author_custom')[0];
$image = get_field('image', $term);
$title = $term->name;
$text = get_field('text', $term);
$job = get_field('job', $term);
$socials = get_field('socials', $term);
?>
<div class="consulting__author">
  <div class="consulting__dotted-2">
    <svg width="367" height="102" viewBox="0 0 367 102" fill="none" xmlns="http://www.w3.org/2000/svg">
      <g opacity="0.51">
        <path d="M353.226 4.72577C353.192 3.21276 353.157 1.69392 353.122 0.180914C353.112 -0.251373 352.733 -0.613817 352.301 -0.603906C350.788 -0.569216 349.269 -0.534393 347.756 -0.499704C347.324 -0.489793 346.961 -0.110339 346.971 0.321948C347.006 1.83495 347.04 3.3538 347.075 4.8668C347.085 5.29909 347.464 5.66153 347.897 5.65162C349.41 5.61693 350.929 5.58211 352.442 5.54742C352.675 5.54206 352.854 5.45029 352.98 5.31882C352.989 5.30986 352.994 5.30388 353.003 5.29491C353.009 5.28894 353.017 5.27997 353.023 5.274C353.151 5.14539 353.232 4.96528 353.226 4.72577ZM348.663 4.02966C348.641 3.04825 348.618 2.07268 348.596 1.09127C349.577 1.06877 350.553 1.04641 351.534 1.02391C351.557 2.00531 351.579 2.98088 351.602 3.96229C350.623 3.9818 349.645 4.00716 348.663 4.02966Z" fill="url(#paint0_linear_5_4541)"></path>
        <path d="M330.508 5.24727C330.473 3.73426 330.438 2.21542 330.404 0.702415C330.394 0.270129 330.014 -0.0923153 329.582 -0.082404C328.069 -0.0477145 326.55 -0.0128907 325.037 0.0217986C324.605 0.0317101 324.242 0.411164 324.252 0.843451C324.287 2.35645 324.322 3.8753 324.356 5.3883C324.366 5.82059 324.746 6.18303 325.178 6.17312C326.691 6.13843 328.21 6.10361 329.723 6.06892C329.957 6.06356 330.136 5.97179 330.261 5.84032C330.27 5.83136 330.275 5.82538 330.284 5.81642C330.29 5.81044 330.298 5.80147 330.304 5.7955C330.433 5.66689 330.513 5.48678 330.508 5.24727ZM325.945 4.55114C325.922 3.56973 325.9 2.59419 325.877 1.61278C326.859 1.59028 327.834 1.56789 328.816 1.54539C328.838 2.5268 328.86 3.50238 328.883 4.48379C327.904 4.5033 326.926 4.52864 325.945 4.55114Z" fill="url(#paint1_linear_5_4541)"></path>
        <path d="M307.791 5.76875C307.756 4.25575 307.721 2.7369 307.687 1.2239C307.677 0.791613 307.297 0.429169 306.865 0.43908C305.352 0.47377 303.833 0.508594 302.32 0.543283C301.888 0.553194 301.526 0.932648 301.535 1.36494C301.57 2.87794 301.605 4.39678 301.64 5.90979C301.65 6.34207 302.029 6.70452 302.461 6.69461C303.974 6.65992 305.493 6.62509 307.006 6.5904C307.24 6.58505 307.419 6.49327 307.544 6.36181C307.553 6.35284 307.559 6.34686 307.567 6.3379C307.573 6.33192 307.582 6.32296 307.587 6.31698C307.713 6.19136 307.796 6.00826 307.791 5.76875ZM303.228 5.07264C303.205 4.09124 303.183 3.11567 303.16 2.13426C304.142 2.11176 305.117 2.08939 306.099 2.06689C306.121 3.0483 306.144 4.02387 306.166 5.00527C305.188 5.02479 304.209 5.05014 303.228 5.07264Z" fill="url(#paint2_linear_5_4541)"></path>
        <path d="M331.03 27.966C330.996 26.453 330.961 24.9342 330.926 23.4211C330.916 22.9889 330.537 22.6264 330.104 22.6363C328.591 22.671 327.073 22.7059 325.56 22.7405C325.127 22.7505 324.765 23.1299 324.775 23.5622C324.809 25.0752 324.844 26.594 324.879 28.107C324.889 28.5393 325.268 28.9018 325.7 28.8919C327.214 28.8572 328.732 28.8224 330.245 28.7877C330.479 28.7823 330.658 28.6905 330.784 28.5591C330.792 28.5501 330.798 28.5441 330.807 28.5352C330.812 28.5292 330.821 28.5202 330.826 28.5142C330.952 28.3886 331.036 28.2055 331.03 27.966ZM326.467 27.2699C326.444 26.2885 326.422 25.3129 326.4 24.3315C327.381 24.309 328.357 24.2866 329.338 24.2641C329.361 25.2455 329.383 26.2211 329.405 27.2025C328.427 27.2221 327.448 27.2474 326.467 27.2699Z" fill="url(#paint3_linear_5_4541)"></path>
        <path d="M285.072 6.28828C285.038 4.77528 285.003 3.25643 284.968 1.74343C284.958 1.31114 284.579 0.9487 284.146 0.958611C282.633 0.993301 281.115 1.02811 279.602 1.0628C279.169 1.07271 278.807 1.45216 278.817 1.88445C278.851 3.39745 278.886 4.91631 278.921 6.42932C278.931 6.8616 279.31 7.22405 279.743 7.21414C281.256 7.17945 282.774 7.14462 284.287 7.10993C284.521 7.10458 284.7 7.0128 284.826 6.88134C284.834 6.87237 284.84 6.86641 284.849 6.85745C284.854 6.85147 284.863 6.84251 284.868 6.83653C284.994 6.71091 285.078 6.52779 285.072 6.28828ZM280.509 5.59217C280.487 4.61077 280.464 3.63518 280.442 2.65377C281.423 2.63127 282.399 2.60892 283.38 2.58642C283.403 3.56783 283.425 4.54338 283.447 5.52479C282.466 5.54729 281.49 5.56967 280.509 5.59217Z" fill="url(#paint4_linear_5_4541)"></path>
        <path d="M308.31 28.4855C308.276 26.9725 308.241 25.4537 308.206 23.9407C308.196 23.5084 307.817 23.146 307.385 23.1559C305.872 23.1906 304.353 23.2254 302.84 23.2601C302.408 23.27 302.045 23.6494 302.055 24.0817C302.09 25.5947 302.124 27.1136 302.159 28.6266C302.169 29.0589 302.549 29.4213 302.981 29.4114C304.494 29.3767 306.013 29.3419 307.526 29.3072C307.759 29.3018 307.938 29.2101 308.064 29.0786C308.073 29.0696 308.078 29.0637 308.087 29.0547C308.092 29.0487 308.101 29.0398 308.107 29.0338C308.232 28.9082 308.316 28.725 308.31 28.4855ZM303.747 27.7894C303.725 26.808 303.702 25.8324 303.68 24.851C304.661 24.8285 305.637 24.8062 306.618 24.7837C306.641 25.7651 306.663 26.7406 306.686 27.7221C305.704 27.7446 304.729 27.7669 303.747 27.7894Z" fill="url(#paint5_linear_5_4541)"></path>
        <path d="M262.355 6.80975C262.321 5.29675 262.286 3.7779 262.251 2.2649C262.241 1.83261 261.862 1.47017 261.43 1.48008C259.917 1.51477 258.398 1.54959 256.885 1.58428C256.452 1.59419 256.09 1.97365 256.1 2.40593C256.135 3.91894 256.169 5.43778 256.204 6.95079C256.214 7.38307 256.593 7.74552 257.026 7.7356C258.539 7.70092 260.058 7.66609 261.571 7.6314C261.804 7.62604 261.983 7.53427 262.109 7.40281C262.117 7.39384 262.123 7.38786 262.132 7.3789C262.137 7.37292 262.146 7.36396 262.152 7.35798C262.277 7.23236 262.361 7.04926 262.355 6.80975ZM257.792 6.11364C257.77 5.13223 257.747 4.15667 257.725 3.17526C258.706 3.15276 259.682 3.13039 260.663 3.10789C260.686 4.0893 260.708 5.06486 260.731 6.04627C259.749 6.06877 258.774 6.09114 257.792 6.11364Z" fill="url(#paint6_linear_5_4541)"></path>
        <path d="M285.594 29.009C285.559 27.496 285.524 25.9771 285.49 24.4641C285.48 24.0318 285.1 23.6694 284.668 23.6793C283.155 23.714 281.636 23.7488 280.123 23.7835C279.691 23.7934 279.328 24.1729 279.338 24.6052C279.373 26.1182 279.408 27.637 279.442 29.15C279.452 29.5823 279.832 29.9448 280.264 29.9348C281.777 29.9002 283.296 29.8653 284.809 29.8306C285.043 29.8253 285.222 29.7335 285.347 29.602C285.356 29.5931 285.361 29.5871 285.37 29.5781C285.376 29.5721 285.384 29.5632 285.39 29.5572C285.516 29.4316 285.599 29.2485 285.594 29.009ZM281.03 28.3129C281.008 27.3315 280.986 26.3559 280.963 25.3745C281.945 25.352 282.92 25.3296 283.902 25.3071C283.924 26.2885 283.946 27.2641 283.969 28.2455C282.987 28.268 282.012 28.2904 281.03 28.3129Z" fill="url(#paint7_linear_5_4541)"></path>
        <path d="M308.832 51.2043C308.797 49.6913 308.762 48.1724 308.728 46.6594C308.718 46.2271 308.338 45.8647 307.906 45.8746C306.393 45.9093 304.874 45.9441 303.361 45.9788C302.929 45.9887 302.567 46.3682 302.576 46.8005C302.611 48.3135 302.646 49.8323 302.681 51.3453C302.691 51.7776 303.07 52.14 303.502 52.1301C305.015 52.0954 306.534 52.0606 308.047 52.0259C308.281 52.0206 308.46 51.9288 308.585 51.7973C308.594 51.7884 308.6 51.7824 308.608 51.7734C308.614 51.7675 308.623 51.7585 308.628 51.7525C308.754 51.6269 308.837 51.4438 308.832 51.2043ZM304.269 50.5082C304.246 49.5268 304.224 48.5512 304.201 47.5698C305.183 47.5473 306.158 47.5249 307.14 47.5024C307.162 48.4838 307.185 49.4594 307.207 50.4408C306.226 50.4633 305.25 50.4857 304.269 50.5082Z" fill="url(#paint8_linear_5_4541)"></path>
        <path d="M239.633 7.33516C239.598 5.82216 239.563 4.30329 239.529 2.79029C239.519 2.358 239.139 1.99556 238.707 2.00547C237.194 2.04016 235.675 2.075 234.162 2.10969C233.73 2.1196 233.367 2.49905 233.377 2.93134C233.412 4.44435 233.447 5.96317 233.481 7.47618C233.491 7.90846 233.871 8.27091 234.303 8.261C235.816 8.22631 237.335 8.1915 238.848 8.15681C239.082 8.15145 239.261 8.05968 239.386 7.92821C239.395 7.91925 239.4 7.91327 239.409 7.90431C239.415 7.89833 239.423 7.88937 239.429 7.88339C239.558 7.75478 239.641 7.57168 239.633 7.33516ZM235.072 6.63604C235.05 5.65463 235.028 4.67909 235.005 3.69768C235.986 3.67518 236.962 3.65279 237.943 3.63029C237.966 4.6117 237.988 5.58728 238.011 6.56869C237.029 6.59119 236.054 6.61354 235.072 6.63604Z" fill="url(#paint9_linear_5_4541)"></path>
        <path d="M262.871 29.5305C262.836 28.0175 262.802 26.4986 262.767 24.9856C262.757 24.5533 262.378 24.1909 261.945 24.2008C260.432 24.2355 258.913 24.2703 257.4 24.305C256.968 24.3149 256.606 24.6944 256.616 25.1267C256.65 26.6397 256.685 28.1585 256.72 29.6715C256.73 30.1038 257.109 30.4662 257.541 30.4563C259.054 30.4216 260.573 30.3868 262.086 30.3521C262.32 30.3468 262.499 30.255 262.625 30.1235C262.633 30.1146 262.639 30.1086 262.647 30.0996C262.653 30.0937 262.662 30.0847 262.667 30.0787C262.796 29.9501 262.879 29.767 262.871 29.5305ZM258.311 28.8314C258.288 27.85 258.266 26.8744 258.243 25.893C259.225 25.8705 260.2 25.8481 261.182 25.8256C261.204 26.807 261.227 27.7826 261.249 28.764C260.268 28.7865 259.292 28.8089 258.311 28.8314Z" fill="url(#paint10_linear_5_4541)"></path>
        <path d="M286.109 51.7277C286.075 50.2147 286.04 48.6959 286.005 47.1829C285.995 46.7506 285.616 46.3882 285.184 46.3981C283.67 46.4328 282.152 46.4676 280.639 46.5023C280.206 46.5122 279.844 46.8916 279.854 47.3239C279.888 48.8369 279.923 50.3558 279.958 51.8688C279.968 52.3011 280.347 52.6635 280.78 52.6536C282.293 52.6189 283.811 52.5841 285.324 52.5494C285.558 52.544 285.737 52.4523 285.863 52.3208C285.871 52.3118 285.877 52.3058 285.886 52.2969C285.891 52.2909 285.9 52.2819 285.906 52.276C286.034 52.1474 286.118 51.9643 286.109 51.7277ZM281.549 51.0286C281.526 50.0472 281.504 49.0717 281.482 48.0903C282.463 48.0678 283.439 48.0454 284.42 48.0229C284.442 49.0043 284.465 49.9799 284.487 50.9613C283.506 50.9838 282.53 51.0061 281.549 51.0286Z" fill="url(#paint11_linear_5_4541)"></path>
        <path d="M216.914 7.85469C216.879 6.34169 216.845 4.82284 216.81 3.30984C216.8 2.87755 216.42 2.51511 215.988 2.52502C214.475 2.55971 212.956 2.59453 211.443 2.62922C211.011 2.63913 210.649 3.01859 210.658 3.45087C210.693 4.96388 210.728 6.48272 210.763 7.99572C210.773 8.42801 211.152 8.79046 211.584 8.78054C213.097 8.74585 214.616 8.71103 216.129 8.67634C216.363 8.67098 216.542 8.57919 216.667 8.44773C216.676 8.43876 216.682 8.4328 216.69 8.42384C216.696 8.41786 216.705 8.4089 216.71 8.40292C216.839 8.27431 216.922 8.09121 216.914 7.85469ZM212.354 7.15559C212.331 6.17418 212.309 5.19862 212.286 4.21721C213.268 4.19471 214.243 4.17234 215.225 4.14984C215.247 5.13125 215.27 6.10681 215.292 7.08822C214.311 7.11072 213.332 7.13023 212.354 7.15559Z" fill="url(#paint12_linear_5_4541)"></path>
        <path d="M240.154 30.0539C240.12 28.5409 240.085 27.022 240.05 25.509C240.04 25.0768 239.661 24.7143 239.228 24.7242C237.715 24.7589 236.197 24.7937 234.684 24.8284C234.251 24.8384 233.889 25.2178 233.899 25.6501C233.933 27.1631 233.968 28.6819 234.003 30.1949C234.013 30.6272 234.392 30.9897 234.825 30.9797C236.338 30.9451 237.856 30.9103 239.369 30.8756C239.603 30.8702 239.782 30.7784 239.908 30.6469C239.916 30.638 239.922 30.632 239.931 30.6231C239.936 30.6171 239.945 30.6081 239.951 30.6021C240.079 30.4735 240.163 30.2904 240.154 30.0539ZM235.594 29.3548C235.571 28.3734 235.549 27.3978 235.527 26.4164C236.508 26.3939 237.484 26.3715 238.465 26.349C238.487 27.3304 238.51 28.306 238.532 29.2874C237.551 29.3099 236.575 29.3323 235.594 29.3548Z" fill="url(#paint13_linear_5_4541)"></path>
        <path d="M263.392 52.2512C263.358 50.7382 263.323 49.2193 263.288 47.7063C263.278 47.274 262.899 46.9116 262.467 46.9215C260.954 46.9562 259.435 46.991 257.922 47.0257C257.49 47.0356 257.127 47.4151 257.137 47.8474C257.172 49.3604 257.207 50.8792 257.241 52.3922C257.251 52.8245 257.631 53.1869 258.063 53.177C259.576 53.1423 261.095 53.1075 262.608 53.0728C262.841 53.0675 263.02 52.9757 263.146 52.8442C263.155 52.8352 263.16 52.8293 263.169 52.8203C263.175 52.8143 263.183 52.8054 263.189 52.7994C263.317 52.6708 263.401 52.4877 263.392 52.2512ZM258.832 51.5521C258.81 50.5707 258.787 49.5951 258.765 48.6137C259.746 48.5912 260.722 48.5688 261.703 48.5463C261.726 49.5277 261.748 50.5033 261.771 51.4847C260.789 51.5072 259.814 51.5296 258.832 51.5521Z" fill="url(#paint14_linear_5_4541)"></path>
        <path d="M286.631 74.4465C286.596 72.9335 286.561 71.4146 286.527 69.9016C286.517 69.4693 286.137 69.1069 285.705 69.1168C284.192 69.1515 282.673 69.1863 281.16 69.221C280.728 69.2309 280.365 69.6104 280.375 70.0427C280.41 71.5557 280.445 73.0745 280.479 74.5875C280.489 75.0198 280.869 75.3822 281.301 75.3723C282.814 75.3376 284.333 75.3028 285.846 75.2681C286.08 75.2628 286.259 75.171 286.384 75.0395C286.393 75.0306 286.399 75.0246 286.407 75.0156C286.413 75.0097 286.421 75.0007 286.427 74.9947C286.556 74.8661 286.639 74.683 286.631 74.4465ZM282.07 73.7474C282.048 72.766 282.026 71.7904 282.003 70.809C282.984 70.7865 283.96 70.7641 284.941 70.7416C284.964 71.723 284.986 72.6986 285.009 73.68C284.027 73.7025 283.052 73.7249 282.07 73.7474Z" fill="url(#paint15_linear_5_4541)"></path>
        <path d="M194.197 8.37616C194.163 6.86315 194.128 5.34432 194.093 3.83132C194.083 3.39903 193.704 3.03659 193.271 3.0465C191.758 3.08119 190.24 3.116 188.727 3.15069C188.294 3.1606 187.932 3.54005 187.942 3.97234C187.976 5.48534 188.011 7.0042 188.046 8.51721C188.056 8.9495 188.435 9.31194 188.868 9.30203C190.381 9.26734 191.899 9.2325 193.412 9.19781C193.646 9.19245 193.825 9.10069 193.951 8.96923C193.959 8.96026 193.965 8.95428 193.974 8.94532C193.979 8.93934 193.988 8.9304 193.993 8.92442C194.122 8.79581 194.206 8.61268 194.197 8.37616ZM189.637 7.67707C189.614 6.69567 189.592 5.72008 189.57 4.73867C190.551 4.71617 191.526 4.69382 192.508 4.67132C192.53 5.65273 192.553 6.62828 192.575 7.60969C191.594 7.63219 190.615 7.65172 189.637 7.67707Z" fill="url(#paint16_linear_5_4541)"></path>
        <path d="M217.435 30.5734C217.401 29.0604 217.366 27.5416 217.331 26.0286C217.321 25.5963 216.942 25.2338 216.51 25.2438C214.997 25.2784 213.478 25.3133 211.965 25.348C211.533 25.3579 211.17 25.7373 211.18 26.1696C211.215 27.6826 211.249 29.2015 211.284 30.7145C211.294 31.1467 211.673 31.5092 212.106 31.4993C213.619 31.4646 215.138 31.4298 216.651 31.3951C216.884 31.3897 217.063 31.2979 217.189 31.1665C217.198 31.1575 217.203 31.1515 217.212 31.1426C217.218 31.1366 217.226 31.1276 217.232 31.1217C217.36 30.9931 217.444 30.8099 217.435 30.5734ZM212.875 29.8743C212.853 28.8929 212.83 27.9173 212.808 26.9359C213.789 26.9134 214.765 26.8911 215.746 26.8686C215.769 27.85 215.791 28.8255 215.814 29.807C214.832 29.8295 213.857 29.8518 212.875 29.8743Z" fill="url(#paint17_linear_5_4541)"></path>
        <path d="M240.674 52.7707C240.639 51.2577 240.604 49.7389 240.57 48.2259C240.56 47.7936 240.18 47.4311 239.748 47.441C238.235 47.4757 236.716 47.5105 235.203 47.5452C234.771 47.5551 234.408 47.9346 234.418 48.3669C234.453 49.8799 234.488 51.3987 234.522 52.9117C234.532 53.344 234.912 53.7065 235.344 53.6966C236.857 53.6619 238.376 53.627 239.889 53.5924C240.123 53.587 240.302 53.4952 240.427 53.3638C240.436 53.3548 240.442 53.3488 240.45 53.3399C240.456 53.3339 240.464 53.3249 240.47 53.319C240.599 53.1903 240.682 53.0072 240.674 52.7707ZM236.113 52.0716C236.091 51.0902 236.069 50.1146 236.046 49.1332C237.027 49.1107 238.003 49.0884 238.984 49.0659C239.007 50.0473 239.029 51.0228 239.052 52.0042C238.07 52.0267 237.095 52.0491 236.113 52.0716Z" fill="url(#paint18_linear_5_4541)"></path>
        <path d="M263.913 74.968C263.878 73.4549 263.844 71.9361 263.809 70.4231C263.799 69.9908 263.42 69.6284 262.987 69.6383C261.474 69.673 259.955 69.7078 258.442 69.7425C258.01 69.7524 257.648 70.1318 257.658 70.5641C257.692 72.0771 257.727 73.596 257.762 75.109C257.772 75.5413 258.151 75.9037 258.583 75.8938C260.096 75.8591 261.615 75.8243 263.128 75.7896C263.362 75.7842 263.541 75.6925 263.667 75.561C263.675 75.552 263.681 75.5461 263.689 75.5371C263.695 75.5311 263.704 75.5222 263.709 75.5162C263.838 75.3876 263.921 75.2045 263.913 74.968ZM259.353 74.2689C259.33 73.2874 259.308 72.3119 259.285 71.3305C260.267 71.308 261.242 71.2856 262.224 71.2631C262.246 72.2445 262.269 73.2201 262.291 74.2015C261.31 74.224 260.334 74.2464 259.353 74.2689Z" fill="url(#paint19_linear_5_4541)"></path>
        <path d="M171.478 8.89764C171.444 7.38464 171.409 5.86579 171.374 4.35279C171.364 3.9205 170.985 3.55806 170.553 3.56797C169.04 3.60266 167.521 3.63748 166.008 3.67217C165.576 3.68208 165.213 4.06154 165.223 4.49382C165.258 6.00683 165.292 7.52567 165.327 9.03868C165.337 9.47096 165.716 9.83341 166.149 9.8235C167.662 9.78881 169.181 9.75398 170.694 9.71929C170.927 9.71394 171.106 9.62216 171.232 9.4907C171.24 9.48173 171.246 9.47575 171.255 9.46679C171.26 9.46081 171.269 9.45185 171.275 9.44587C171.403 9.31726 171.487 9.13416 171.478 8.89764ZM166.918 8.19854C166.896 7.21713 166.873 6.24157 166.851 5.26016C167.832 5.23766 168.808 5.21529 169.789 5.19279C169.812 6.1742 169.834 7.14976 169.856 8.13117C168.875 8.15367 167.897 8.17319 166.918 8.19854Z" fill="url(#paint20_linear_5_4541)"></path>
        <path d="M194.719 31.0949C194.684 29.5819 194.649 28.0631 194.615 26.5501C194.605 26.1178 194.225 25.7553 193.793 25.7653C192.28 25.7999 190.761 25.8347 189.248 25.8694C188.816 25.8793 188.453 26.2588 188.463 26.6911C188.498 28.2041 188.533 29.723 188.567 31.236C188.577 31.6682 188.957 32.0307 189.389 32.0208C190.902 31.9861 192.421 31.9512 193.934 31.9166C194.168 31.9112 194.347 31.8194 194.472 31.688C194.481 31.679 194.486 31.673 194.495 31.6641C194.501 31.6581 194.509 31.6491 194.515 31.6431C194.644 31.5145 194.727 31.3314 194.719 31.0949ZM190.158 30.3958C190.136 29.4144 190.113 28.4388 190.091 27.4574C191.072 27.4349 192.048 27.4126 193.029 27.3901C193.052 28.3715 193.074 29.347 193.097 30.3284C192.115 30.3509 191.137 30.3705 190.158 30.3958Z" fill="url(#paint21_linear_5_4541)"></path>
        <path d="M217.955 53.2922C217.92 51.7792 217.886 50.2603 217.851 48.7473C217.841 48.315 217.461 47.9526 217.029 47.9625C215.516 47.9972 213.997 48.032 212.484 48.0667C212.052 48.0766 211.69 48.4561 211.7 48.8884C211.734 50.4014 211.769 51.9202 211.804 53.4332C211.814 53.8655 212.193 54.2279 212.625 54.218C214.138 54.1833 215.657 54.1485 217.17 54.1138C217.404 54.1085 217.583 54.0167 217.708 53.8852C217.717 53.8763 217.723 53.8703 217.731 53.8613C217.737 53.8553 217.746 53.8464 217.751 53.8404C217.88 53.7118 217.963 53.5287 217.955 53.2922ZM213.395 52.5931C213.372 51.6117 213.35 50.6361 213.327 49.6547C214.309 49.6322 215.284 49.6098 216.266 49.5873C216.288 50.5687 216.311 51.5443 216.333 52.5257C215.352 52.5482 214.376 52.5706 213.395 52.5931Z" fill="url(#paint22_linear_5_4541)"></path>
        <path d="M241.195 75.4894C241.161 73.9764 241.126 72.4576 241.091 70.9446C241.081 70.5123 240.702 70.1499 240.269 70.1598C238.756 70.1945 237.238 70.2293 235.725 70.264C235.292 70.2739 234.93 70.6533 234.94 71.0856C234.974 72.5986 235.009 74.1175 235.044 75.6305C235.054 76.0628 235.433 76.4252 235.866 76.4153C237.379 76.3806 238.897 76.3458 240.41 76.3111C240.644 76.3057 240.823 76.214 240.949 76.0825C240.957 76.0735 240.963 76.0675 240.972 76.0586C240.977 76.0526 240.986 76.0436 240.992 76.0377C241.12 75.9091 241.204 75.726 241.195 75.4894ZM236.635 74.7904C236.612 73.8089 236.59 72.8334 236.568 71.852C237.549 71.8295 238.525 71.8071 239.506 71.7846C239.528 72.766 239.551 73.7416 239.573 74.723C238.592 74.7455 237.616 74.7679 236.635 74.7904Z" fill="url(#paint23_linear_5_4541)"></path>
        <path d="M264.434 97.6867C264.399 96.1737 264.364 94.6549 264.329 93.1419C264.319 92.7096 263.94 92.3471 263.508 92.357C261.995 92.3917 260.476 92.4265 258.963 92.4612C258.531 92.4711 258.168 92.8506 258.178 93.2829C258.213 94.7959 258.248 96.3147 258.282 97.8277C258.292 98.26 258.672 98.6225 259.104 98.6126C260.617 98.5779 262.136 98.543 263.649 98.5084C263.882 98.503 264.061 98.4112 264.187 98.2798C264.196 98.2708 264.201 98.2648 264.21 98.2559C264.216 98.2499 264.224 98.2409 264.23 98.2349C264.358 98.1063 264.442 97.9232 264.434 97.6867ZM259.873 96.9876C259.851 96.0062 259.828 95.0306 259.806 94.0492C260.787 94.0267 261.763 94.0044 262.744 93.9819C262.767 94.9633 262.789 95.9388 262.812 96.9202C261.83 96.9427 260.855 96.9651 259.873 96.9876Z" fill="url(#paint24_linear_5_4541)"></path>
      </g>
      <defs>
        <linearGradient id="paint0_linear_5_4541" x1="337.023" y1="-426.524" x2="353.522" y2="114.595" gradientUnits="userSpaceOnUse">
          <stop stop-color="#BE965D"></stop>
          <stop offset="0.2784" stop-color="#976F40"></stop>
          <stop offset="0.4259" stop-color="#C99B61"></stop>
          <stop offset="0.5584" stop-color="#F0BE7B"></stop>
          <stop offset="0.6275" stop-color="#FFCB85"></stop>
          <stop offset="0.7085" stop-color="#EEBC79"></stop>
          <stop offset="0.8693" stop-color="#C0935B"></stop>
          <stop offset="1" stop-color="#976F40"></stop>
        </linearGradient>
        <linearGradient id="paint1_linear_5_4541" x1="314.309" y1="-425.832" x2="330.808" y2="115.288" gradientUnits="userSpaceOnUse">
          <stop stop-color="#BE965D"></stop>
          <stop offset="0.2784" stop-color="#976F40"></stop>
          <stop offset="0.4259" stop-color="#C99B61"></stop>
          <stop offset="0.5584" stop-color="#F0BE7B"></stop>
          <stop offset="0.6275" stop-color="#FFCB85"></stop>
          <stop offset="0.7085" stop-color="#EEBC79"></stop>
          <stop offset="0.8693" stop-color="#C0935B"></stop>
          <stop offset="1" stop-color="#976F40"></stop>
        </linearGradient>
        <linearGradient id="paint2_linear_5_4541" x1="291.597" y1="-425.138" x2="308.096" y2="115.981" gradientUnits="userSpaceOnUse">
          <stop stop-color="#BE965D"></stop>
          <stop offset="0.2784" stop-color="#976F40"></stop>
          <stop offset="0.4259" stop-color="#C99B61"></stop>
          <stop offset="0.5584" stop-color="#F0BE7B"></stop>
          <stop offset="0.6275" stop-color="#FFCB85"></stop>
          <stop offset="0.7085" stop-color="#EEBC79"></stop>
          <stop offset="0.8693" stop-color="#C0935B"></stop>
          <stop offset="1" stop-color="#976F40"></stop>
        </linearGradient>
        <linearGradient id="paint3_linear_5_4541" x1="314.139" y1="-425.826" x2="330.638" y2="115.293" gradientUnits="userSpaceOnUse">
          <stop stop-color="#BE965D"></stop>
          <stop offset="0.2784" stop-color="#976F40"></stop>
          <stop offset="0.4259" stop-color="#C99B61"></stop>
          <stop offset="0.5584" stop-color="#F0BE7B"></stop>
          <stop offset="0.6275" stop-color="#FFCB85"></stop>
          <stop offset="0.7085" stop-color="#EEBC79"></stop>
          <stop offset="0.8693" stop-color="#C0935B"></stop>
          <stop offset="1" stop-color="#976F40"></stop>
        </linearGradient>
        <linearGradient id="paint4_linear_5_4541" x1="268.883" y1="-424.448" x2="285.381" y2="116.673" gradientUnits="userSpaceOnUse">
          <stop stop-color="#BE965D"></stop>
          <stop offset="0.2784" stop-color="#976F40"></stop>
          <stop offset="0.4259" stop-color="#C99B61"></stop>
          <stop offset="0.5584" stop-color="#F0BE7B"></stop>
          <stop offset="0.6275" stop-color="#FFCB85"></stop>
          <stop offset="0.7085" stop-color="#EEBC79"></stop>
          <stop offset="0.8693" stop-color="#C0935B"></stop>
          <stop offset="1" stop-color="#976F40"></stop>
        </linearGradient>
        <linearGradient id="paint5_linear_5_4541" x1="291.425" y1="-425.135" x2="307.924" y2="115.985" gradientUnits="userSpaceOnUse">
          <stop stop-color="#BE965D"></stop>
          <stop offset="0.2784" stop-color="#976F40"></stop>
          <stop offset="0.4259" stop-color="#C99B61"></stop>
          <stop offset="0.5584" stop-color="#F0BE7B"></stop>
          <stop offset="0.6275" stop-color="#FFCB85"></stop>
          <stop offset="0.7085" stop-color="#EEBC79"></stop>
          <stop offset="0.8693" stop-color="#C0935B"></stop>
          <stop offset="1" stop-color="#976F40"></stop>
        </linearGradient>
        <linearGradient id="paint6_linear_5_4541" x1="246.172" y1="-423.754" x2="262.671" y2="117.365" gradientUnits="userSpaceOnUse">
          <stop stop-color="#BE965D"></stop>
          <stop offset="0.2784" stop-color="#976F40"></stop>
          <stop offset="0.4259" stop-color="#C99B61"></stop>
          <stop offset="0.5584" stop-color="#F0BE7B"></stop>
          <stop offset="0.6275" stop-color="#FFCB85"></stop>
          <stop offset="0.7085" stop-color="#EEBC79"></stop>
          <stop offset="0.8693" stop-color="#C0935B"></stop>
          <stop offset="1" stop-color="#976F40"></stop>
        </linearGradient>
        <linearGradient id="paint7_linear_5_4541" x1="268.713" y1="-424.44" x2="285.212" y2="116.679" gradientUnits="userSpaceOnUse">
          <stop stop-color="#BE965D"></stop>
          <stop offset="0.2784" stop-color="#976F40"></stop>
          <stop offset="0.4259" stop-color="#C99B61"></stop>
          <stop offset="0.5584" stop-color="#F0BE7B"></stop>
          <stop offset="0.6275" stop-color="#FFCB85"></stop>
          <stop offset="0.7085" stop-color="#EEBC79"></stop>
          <stop offset="0.8693" stop-color="#C0935B"></stop>
          <stop offset="1" stop-color="#976F40"></stop>
        </linearGradient>
        <linearGradient id="paint8_linear_5_4541" x1="291.254" y1="-425.129" x2="307.753" y2="115.99" gradientUnits="userSpaceOnUse">
          <stop stop-color="#BE965D"></stop>
          <stop offset="0.2784" stop-color="#976F40"></stop>
          <stop offset="0.4259" stop-color="#C99B61"></stop>
          <stop offset="0.5584" stop-color="#F0BE7B"></stop>
          <stop offset="0.6275" stop-color="#FFCB85"></stop>
          <stop offset="0.7085" stop-color="#EEBC79"></stop>
          <stop offset="0.8693" stop-color="#C0935B"></stop>
          <stop offset="1" stop-color="#976F40"></stop>
        </linearGradient>
        <linearGradient id="paint9_linear_5_4541" x1="223.457" y1="-423.06" x2="239.956" y2="118.06" gradientUnits="userSpaceOnUse">
          <stop stop-color="#BE965D"></stop>
          <stop offset="0.2784" stop-color="#976F40"></stop>
          <stop offset="0.4259" stop-color="#C99B61"></stop>
          <stop offset="0.5584" stop-color="#F0BE7B"></stop>
          <stop offset="0.6275" stop-color="#FFCB85"></stop>
          <stop offset="0.7085" stop-color="#EEBC79"></stop>
          <stop offset="0.8693" stop-color="#C0935B"></stop>
          <stop offset="1" stop-color="#976F40"></stop>
        </linearGradient>
        <linearGradient id="paint10_linear_5_4541" x1="245.997" y1="-423.75" x2="262.495" y2="117.37" gradientUnits="userSpaceOnUse">
          <stop stop-color="#BE965D"></stop>
          <stop offset="0.2784" stop-color="#976F40"></stop>
          <stop offset="0.4259" stop-color="#C99B61"></stop>
          <stop offset="0.5584" stop-color="#F0BE7B"></stop>
          <stop offset="0.6275" stop-color="#FFCB85"></stop>
          <stop offset="0.7085" stop-color="#EEBC79"></stop>
          <stop offset="0.8693" stop-color="#C0935B"></stop>
          <stop offset="1" stop-color="#976F40"></stop>
        </linearGradient>
        <linearGradient id="paint11_linear_5_4541" x1="268.539" y1="-424.437" x2="285.038" y2="116.683" gradientUnits="userSpaceOnUse">
          <stop stop-color="#BE965D"></stop>
          <stop offset="0.2784" stop-color="#976F40"></stop>
          <stop offset="0.4259" stop-color="#C99B61"></stop>
          <stop offset="0.5584" stop-color="#F0BE7B"></stop>
          <stop offset="0.6275" stop-color="#FFCB85"></stop>
          <stop offset="0.7085" stop-color="#EEBC79"></stop>
          <stop offset="0.8693" stop-color="#C0935B"></stop>
          <stop offset="1" stop-color="#976F40"></stop>
        </linearGradient>
        <linearGradient id="paint12_linear_5_4541" x1="200.743" y1="-422.369" x2="217.242" y2="118.751" gradientUnits="userSpaceOnUse">
          <stop stop-color="#BE965D"></stop>
          <stop offset="0.2784" stop-color="#976F40"></stop>
          <stop offset="0.4259" stop-color="#C99B61"></stop>
          <stop offset="0.5584" stop-color="#F0BE7B"></stop>
          <stop offset="0.6275" stop-color="#FFCB85"></stop>
          <stop offset="0.7085" stop-color="#EEBC79"></stop>
          <stop offset="0.8693" stop-color="#C0935B"></stop>
          <stop offset="1" stop-color="#976F40"></stop>
        </linearGradient>
        <linearGradient id="paint13_linear_5_4541" x1="223.286" y1="-423.055" x2="239.785" y2="118.065" gradientUnits="userSpaceOnUse">
          <stop stop-color="#BE965D"></stop>
          <stop offset="0.2784" stop-color="#976F40"></stop>
          <stop offset="0.4259" stop-color="#C99B61"></stop>
          <stop offset="0.5584" stop-color="#F0BE7B"></stop>
          <stop offset="0.6275" stop-color="#FFCB85"></stop>
          <stop offset="0.7085" stop-color="#EEBC79"></stop>
          <stop offset="0.8693" stop-color="#C0935B"></stop>
          <stop offset="1" stop-color="#976F40"></stop>
        </linearGradient>
        <linearGradient id="paint14_linear_5_4541" x1="245.827" y1="-423.743" x2="262.326" y2="117.378" gradientUnits="userSpaceOnUse">
          <stop stop-color="#BE965D"></stop>
          <stop offset="0.2784" stop-color="#976F40"></stop>
          <stop offset="0.4259" stop-color="#C99B61"></stop>
          <stop offset="0.5584" stop-color="#F0BE7B"></stop>
          <stop offset="0.6275" stop-color="#FFCB85"></stop>
          <stop offset="0.7085" stop-color="#EEBC79"></stop>
          <stop offset="0.8693" stop-color="#C0935B"></stop>
          <stop offset="1" stop-color="#976F40"></stop>
        </linearGradient>
        <linearGradient id="paint15_linear_5_4541" x1="268.368" y1="-424.432" x2="284.867" y2="116.689" gradientUnits="userSpaceOnUse">
          <stop stop-color="#BE965D"></stop>
          <stop offset="0.2784" stop-color="#976F40"></stop>
          <stop offset="0.4259" stop-color="#C99B61"></stop>
          <stop offset="0.5584" stop-color="#F0BE7B"></stop>
          <stop offset="0.6275" stop-color="#FFCB85"></stop>
          <stop offset="0.7085" stop-color="#EEBC79"></stop>
          <stop offset="0.8693" stop-color="#C0935B"></stop>
          <stop offset="1" stop-color="#976F40"></stop>
        </linearGradient>
        <linearGradient id="paint16_linear_5_4541" x1="178.03" y1="-421.678" x2="194.529" y2="119.444" gradientUnits="userSpaceOnUse">
          <stop stop-color="#BE965D"></stop>
          <stop offset="0.2784" stop-color="#976F40"></stop>
          <stop offset="0.4259" stop-color="#C99B61"></stop>
          <stop offset="0.5584" stop-color="#F0BE7B"></stop>
          <stop offset="0.6275" stop-color="#FFCB85"></stop>
          <stop offset="0.7085" stop-color="#EEBC79"></stop>
          <stop offset="0.8693" stop-color="#C0935B"></stop>
          <stop offset="1" stop-color="#976F40"></stop>
        </linearGradient>
        <linearGradient id="paint17_linear_5_4541" x1="200.572" y1="-422.364" x2="217.071" y2="118.757" gradientUnits="userSpaceOnUse">
          <stop stop-color="#BE965D"></stop>
          <stop offset="0.2784" stop-color="#976F40"></stop>
          <stop offset="0.4259" stop-color="#C99B61"></stop>
          <stop offset="0.5584" stop-color="#F0BE7B"></stop>
          <stop offset="0.6275" stop-color="#FFCB85"></stop>
          <stop offset="0.7085" stop-color="#EEBC79"></stop>
          <stop offset="0.8693" stop-color="#C0935B"></stop>
          <stop offset="1" stop-color="#976F40"></stop>
        </linearGradient>
        <linearGradient id="paint18_linear_5_4541" x1="223.113" y1="-423.052" x2="239.611" y2="118.069" gradientUnits="userSpaceOnUse">
          <stop stop-color="#BE965D"></stop>
          <stop offset="0.2784" stop-color="#976F40"></stop>
          <stop offset="0.4259" stop-color="#C99B61"></stop>
          <stop offset="0.5584" stop-color="#F0BE7B"></stop>
          <stop offset="0.6275" stop-color="#FFCB85"></stop>
          <stop offset="0.7085" stop-color="#EEBC79"></stop>
          <stop offset="0.8693" stop-color="#C0935B"></stop>
          <stop offset="1" stop-color="#976F40"></stop>
        </linearGradient>
        <linearGradient id="paint19_linear_5_4541" x1="245.655" y1="-423.739" x2="262.154" y2="117.381" gradientUnits="userSpaceOnUse">
          <stop stop-color="#BE965D"></stop>
          <stop offset="0.2784" stop-color="#976F40"></stop>
          <stop offset="0.4259" stop-color="#C99B61"></stop>
          <stop offset="0.5584" stop-color="#F0BE7B"></stop>
          <stop offset="0.6275" stop-color="#FFCB85"></stop>
          <stop offset="0.7085" stop-color="#EEBC79"></stop>
          <stop offset="0.8693" stop-color="#C0935B"></stop>
          <stop offset="1" stop-color="#976F40"></stop>
        </linearGradient>
        <linearGradient id="paint20_linear_5_4541" x1="155.317" y1="-420.983" x2="171.816" y2="120.137" gradientUnits="userSpaceOnUse">
          <stop stop-color="#BE965D"></stop>
          <stop offset="0.2784" stop-color="#976F40"></stop>
          <stop offset="0.4259" stop-color="#C99B61"></stop>
          <stop offset="0.5584" stop-color="#F0BE7B"></stop>
          <stop offset="0.6275" stop-color="#FFCB85"></stop>
          <stop offset="0.7085" stop-color="#EEBC79"></stop>
          <stop offset="0.8693" stop-color="#C0935B"></stop>
          <stop offset="1" stop-color="#976F40"></stop>
        </linearGradient>
        <linearGradient id="paint21_linear_5_4541" x1="177.86" y1="-421.671" x2="194.359" y2="119.45" gradientUnits="userSpaceOnUse">
          <stop stop-color="#BE965D"></stop>
          <stop offset="0.2784" stop-color="#976F40"></stop>
          <stop offset="0.4259" stop-color="#C99B61"></stop>
          <stop offset="0.5584" stop-color="#F0BE7B"></stop>
          <stop offset="0.6275" stop-color="#FFCB85"></stop>
          <stop offset="0.7085" stop-color="#EEBC79"></stop>
          <stop offset="0.8693" stop-color="#C0935B"></stop>
          <stop offset="1" stop-color="#976F40"></stop>
        </linearGradient>
        <linearGradient id="paint22_linear_5_4541" x1="200.399" y1="-422.358" x2="216.898" y2="118.763" gradientUnits="userSpaceOnUse">
          <stop stop-color="#BE965D"></stop>
          <stop offset="0.2784" stop-color="#976F40"></stop>
          <stop offset="0.4259" stop-color="#C99B61"></stop>
          <stop offset="0.5584" stop-color="#F0BE7B"></stop>
          <stop offset="0.6275" stop-color="#FFCB85"></stop>
          <stop offset="0.7085" stop-color="#EEBC79"></stop>
          <stop offset="0.8693" stop-color="#C0935B"></stop>
          <stop offset="1" stop-color="#976F40"></stop>
        </linearGradient>
        <linearGradient id="paint23_linear_5_4541" x1="222.942" y1="-423.046" x2="239.441" y2="118.075" gradientUnits="userSpaceOnUse">
          <stop stop-color="#BE965D"></stop>
          <stop offset="0.2784" stop-color="#976F40"></stop>
          <stop offset="0.4259" stop-color="#C99B61"></stop>
          <stop offset="0.5584" stop-color="#F0BE7B"></stop>
          <stop offset="0.6275" stop-color="#FFCB85"></stop>
          <stop offset="0.7085" stop-color="#EEBC79"></stop>
          <stop offset="0.8693" stop-color="#C0935B"></stop>
          <stop offset="1" stop-color="#976F40"></stop>
        </linearGradient>
        <linearGradient id="paint24_linear_5_4541" x1="245.484" y1="-423.734" x2="261.982" y2="117.387" gradientUnits="userSpaceOnUse">
          <stop stop-color="#BE965D"></stop>
          <stop offset="0.2784" stop-color="#976F40"></stop>
          <stop offset="0.4259" stop-color="#C99B61"></stop>
          <stop offset="0.5584" stop-color="#F0BE7B"></stop>
          <stop offset="0.6275" stop-color="#FFCB85"></stop>
          <stop offset="0.7085" stop-color="#EEBC79"></stop>
          <stop offset="0.8693" stop-color="#C0935B"></stop>
          <stop offset="1" stop-color="#976F40"></stop>
        </linearGradient>
      </defs>
    </svg>
  </div>
  <div class="consulting__decor">
    <svg width="205" height="221" viewBox="0 0 205 221" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M90.5365 212.026C90.9971 212.176 90.9971 212.828 90.5365 212.977L86.4721 214.298C86.2661 214.365 86.1266 214.557 86.1266 214.773L86.1266 219.047C86.1266 219.531 85.5068 219.733 85.2221 219.341L82.7102 215.883C82.5829 215.708 82.3572 215.635 82.1512 215.702L78.0869 217.022C77.6262 217.172 77.2432 216.645 77.5279 216.253L80.0398 212.796C80.1671 212.62 80.1671 212.383 80.0398 212.208L77.5279 208.75C77.2432 208.359 77.6262 207.831 78.0869 207.981L82.1512 209.302C82.3572 209.369 82.5829 209.295 82.7102 209.12L85.2221 205.663C85.5068 205.271 86.1266 205.472 86.1266 205.957L86.1266 210.23C86.1266 210.447 86.2661 210.639 86.4721 210.706L90.5365 212.026Z" fill="#B5B5B5"></path>
      <path d="M3.35813 27.905C3.05063 27.6735 3.10903 27.1959 3.46326 27.0454L36.1117 13.1683C36.4659 13.0177 36.8503 13.3071 36.8036 13.6891L32.4973 48.9021C32.4505 49.2841 32.0077 49.4723 31.7002 49.2408L3.35813 27.905Z" fill="#FFCC4A"></path>
      <circle cx="189.951" cy="14.9531" r="14.9511" transform="rotate(90 189.951 14.9531)" fill="#4EAF4E"></circle>
    </svg>
  </div>
  <div class="consulting__flex">
    <div class="consulting__ava">
      <img src="<?php echo $image; ?>" alt="">
    </div>
    <div class="consulting__content">
      <h4 class="consulting__name"><?php echo $title; ?></h4>
      <div class="consulting__job"><?php echo $job; ?></div>
      <div class="consulting__desc text"><?php echo $text; ?></div>
      <div class="consulting__social">
        <?php foreach ($socials as $item) : ?>
          <?php
          $url = $item['url'];
          $icon = $item['icon'];
          $image_path = 'template-parts/icons/icon-' . $icon . '-white';
          ?>
          <a href="<?php echo $url; ?>">
          <?php get_template_part($image_path); ?>
        </a>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>