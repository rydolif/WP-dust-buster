<?php
	/**
		* Template name: index
	*/
 ?>

<?php get_header(); ?>

			
	<section class="hero">
		<div class="hero__container container">

			<div class="hero__content">

				<h1>Cleaning Services For a Busy Lifestyle</h1>

				<a href="tel:<?php the_field('phone_url', 'option'); ?>" class="hero__tel">
					<b><?php the_field('phone', 'option'); ?></b>
				</a>

				<p class="hero__subtitle">Construction Cleaning <span>&</span> Janitorial Services</p>

				<a href="#" class="order_open hero__btn btn">Get a Quote</a>

			</div>

			<div class="hero__decor">

				<svg viewBox="0 0 200 200">
				    <defs>
				        <!-- Разноцветный градиент -->
				        <linearGradient id="gradient--colors"
				            x1="0" y1="100%"
				            x2="100%" y2="0">
				            <stop offset="0%"
				                stop-color="white"/>
				            <stop offset="50%"
				                stop-color="white"/>
				            <stop offset="100%"
				                stop-color="white"/>
				        </linearGradient>

				        <!-- Градиент прозрачности разноцветного слоя -->
				        <radialGradient id="gradient--colors-transparency"
				            fx="25%" fy="25%">
				            <stop offset="0%"
				                  stop-color="white"/>
				            <stop offset="30%"
				                  stop-color="white"
				                  stop-opacity=".2"/>
				            <stop offset="97%"
				                  stop-color="white"
				                  stop-opacity=".4"/>
				            <stop offset="100%"
				                  stop-color="white"/>
				        </radialGradient>

				        <!-- Маска прозрачности разноцветного слоя -->
				        <mask id="mask--colors-transparency">
				            <rect fill="url(#gradient--colors-transparency)"
				              width="100%" height="100%"></rect>
				        </mask>

				        <!-- Градиент для прозрачности -->
				        <radialGradient id="gradient--bw-light" fy="10%">
				            <stop offset="60%"
				                  stop-color="white"
				                  stop-opacity="0"/>
				            <stop offset="90%"
				                  stop-color="white"
				                  stop-opacity=".25"/>
				            <stop offset="100%"
				                  stop-color="white"/>
				        </radialGradient>

				        <!-- Маска для нижнего отражения -->
				        <mask id="mask--light-bottom">
				            <rect fill="url(#gradient--bw-light)"
				                width="100%" height="100%"></rect>
				        </mask>

				        <!-- Маска для верхнего отражения -->
				        <mask id="mask--light-top">
				            <rect fill="url(#gradient--bw-light)"
				                width="100%" height="100%"
				                transform="rotate(180, 100, 100)"></rect>
				        </mask>

				        <!-- Градиент блика -->
				        <radialGradient id="gradient--spot" fy="20%">
				            <stop offset="10%"
				                  stop-color="white"
				                  stop-opacity=".7"/>
				            <stop offset="70%"
				                  stop-color="white"
				                  stop-opacity="0"/>
				        </radialGradient>
				    </defs>        

				    <!-- Нижний блик -->
				    <ellipse rx="40" ry="20" cx="150" cy="150"
				       fill="url(#gradient--spot)"
				       transform="rotate(-225, 150, 150)">
				    </ellipse>    

				    <!-- Нижнее отражение -->
				    <circle r="50%" cx="50%" cy="50%"
				        fill="white"
				        mask="url(#mask--light-bottom)">
				    </circle>

				    <!-- Верхнее отражение -->
				    <circle r="50%" cx="50%" cy="50%"
				        fill="white"
				        mask="url(#mask--light-top)">
				    </circle>


				    <!-- Верхний блик -->
				    <ellipse rx="55" ry="25" cx="55" cy="55"
				       fill="url(#gradient--spot)"
				       transform="rotate(-45, 55, 55)">
				    </ellipse>

				    <!-- Фигура с маской и разноцветным градиентом -->
				    <circle r="50%" cx="50%" cy="50%"
				        fill="url(#gradient--colors)"
				        mask="url(#mask--colors-transparency)">
				    </circle>
				</svg>

				<svg viewBox="0 0 200 200">
				    <defs>
				        <!-- Разноцветный градиент -->
				        <linearGradient id="gradient--colors"
				            x1="0" y1="100%"
				            x2="100%" y2="0">
				            <stop offset="0%"
				                stop-color="white"/>
				            <stop offset="50%"
				                stop-color="white"/>
				            <stop offset="100%"
				                stop-color="white"/>
				        </linearGradient>

				        <!-- Градиент прозрачности разноцветного слоя -->
				        <radialGradient id="gradient--colors-transparency"
				            fx="25%" fy="25%">
				            <stop offset="0%"
				                  stop-color="white"/>
				            <stop offset="30%"
				                  stop-color="white"
				                  stop-opacity=".2"/>
				            <stop offset="97%"
				                  stop-color="white"
				                  stop-opacity=".4"/>
				            <stop offset="100%"
				                  stop-color="white"/>
				        </radialGradient>

				        <!-- Маска прозрачности разноцветного слоя -->
				        <mask id="mask--colors-transparency">
				            <rect fill="url(#gradient--colors-transparency)"
				              width="100%" height="100%"></rect>
				        </mask>

				        <!-- Градиент для прозрачности -->
				        <radialGradient id="gradient--bw-light" fy="10%">
				            <stop offset="60%"
				                  stop-color="white"
				                  stop-opacity="0"/>
				            <stop offset="90%"
				                  stop-color="white"
				                  stop-opacity=".25"/>
				            <stop offset="100%"
				                  stop-color="white"/>
				        </radialGradient>

				        <!-- Маска для нижнего отражения -->
				        <mask id="mask--light-bottom">
				            <rect fill="url(#gradient--bw-light)"
				                width="100%" height="100%"></rect>
				        </mask>

				        <!-- Маска для верхнего отражения -->
				        <mask id="mask--light-top">
				            <rect fill="url(#gradient--bw-light)"
				                width="100%" height="100%"
				                transform="rotate(180, 100, 100)"></rect>
				        </mask>

				        <!-- Градиент блика -->
				        <radialGradient id="gradient--spot" fy="20%">
				            <stop offset="10%"
				                  stop-color="white"
				                  stop-opacity=".7"/>
				            <stop offset="70%"
				                  stop-color="white"
				                  stop-opacity="0"/>
				        </radialGradient>
				    </defs>        

				    <!-- Нижний блик -->
				    <ellipse rx="40" ry="20" cx="150" cy="150"
				       fill="url(#gradient--spot)"
				       transform="rotate(-225, 150, 150)">
				    </ellipse>    

				    <!-- Нижнее отражение -->
				    <circle r="50%" cx="50%" cy="50%"
				        fill="white"
				        mask="url(#mask--light-bottom)">
				    </circle>

				    <!-- Верхнее отражение -->
				    <circle r="50%" cx="50%" cy="50%"
				        fill="white"
				        mask="url(#mask--light-top)">
				    </circle>


				    <!-- Верхний блик -->
				    <ellipse rx="55" ry="25" cx="55" cy="55"
				       fill="url(#gradient--spot)"
				       transform="rotate(-45, 55, 55)">
				    </ellipse>

				    <!-- Фигура с маской и разноцветным градиентом -->
				    <circle r="50%" cx="50%" cy="50%"
				        fill="url(#gradient--colors)"
				        mask="url(#mask--colors-transparency)">
				    </circle>
				</svg>

				<svg viewBox="0 0 200 200">
				    <defs>
				        <!-- Разноцветный градиент -->
				        <linearGradient id="gradient--colors"
				            x1="0" y1="100%"
				            x2="100%" y2="0">
				            <stop offset="0%"
				                stop-color="white"/>
				            <stop offset="50%"
				                stop-color="white"/>
				            <stop offset="100%"
				                stop-color="white"/>
				        </linearGradient>

				        <!-- Градиент прозрачности разноцветного слоя -->
				        <radialGradient id="gradient--colors-transparency"
				            fx="25%" fy="25%">
				            <stop offset="0%"
				                  stop-color="white"/>
				            <stop offset="30%"
				                  stop-color="white"
				                  stop-opacity=".2"/>
				            <stop offset="97%"
				                  stop-color="white"
				                  stop-opacity=".4"/>
				            <stop offset="100%"
				                  stop-color="white"/>
				        </radialGradient>

				        <!-- Маска прозрачности разноцветного слоя -->
				        <mask id="mask--colors-transparency">
				            <rect fill="url(#gradient--colors-transparency)"
				              width="100%" height="100%"></rect>
				        </mask>

				        <!-- Градиент для прозрачности -->
				        <radialGradient id="gradient--bw-light" fy="10%">
				            <stop offset="60%"
				                  stop-color="white"
				                  stop-opacity="0"/>
				            <stop offset="90%"
				                  stop-color="white"
				                  stop-opacity=".25"/>
				            <stop offset="100%"
				                  stop-color="white"/>
				        </radialGradient>

				        <!-- Маска для нижнего отражения -->
				        <mask id="mask--light-bottom">
				            <rect fill="url(#gradient--bw-light)"
				                width="100%" height="100%"></rect>
				        </mask>

				        <!-- Маска для верхнего отражения -->
				        <mask id="mask--light-top">
				            <rect fill="url(#gradient--bw-light)"
				                width="100%" height="100%"
				                transform="rotate(180, 100, 100)"></rect>
				        </mask>

				        <!-- Градиент блика -->
				        <radialGradient id="gradient--spot" fy="20%">
				            <stop offset="10%"
				                  stop-color="white"
				                  stop-opacity=".7"/>
				            <stop offset="70%"
				                  stop-color="white"
				                  stop-opacity="0"/>
				        </radialGradient>
				    </defs>        

				    <!-- Нижний блик -->
				    <ellipse rx="40" ry="20" cx="150" cy="150"
				       fill="url(#gradient--spot)"
				       transform="rotate(-225, 150, 150)">
				    </ellipse>    

				    <!-- Нижнее отражение -->
				    <circle r="50%" cx="50%" cy="50%"
				        fill="white"
				        mask="url(#mask--light-bottom)">
				    </circle>

				    <!-- Верхнее отражение -->
				    <circle r="50%" cx="50%" cy="50%"
				        fill="white"
				        mask="url(#mask--light-top)">
				    </circle>


				    <!-- Верхний блик -->
				    <ellipse rx="55" ry="25" cx="55" cy="55"
				       fill="url(#gradient--spot)"
				       transform="rotate(-45, 55, 55)">
				    </ellipse>

				    <!-- Фигура с маской и разноцветным градиентом -->
				    <circle r="50%" cx="50%" cy="50%"
				        fill="url(#gradient--colors)"
				        mask="url(#mask--colors-transparency)">
				    </circle>
				</svg>

				<svg viewBox="0 0 200 200">
				    <defs>
				        <!-- Разноцветный градиент -->
				        <linearGradient id="gradient--colors"
				            x1="0" y1="100%"
				            x2="100%" y2="0">
				            <stop offset="0%"
				                stop-color="white"/>
				            <stop offset="50%"
				                stop-color="white"/>
				            <stop offset="100%"
				                stop-color="white"/>
				        </linearGradient>

				        <!-- Градиент прозрачности разноцветного слоя -->
				        <radialGradient id="gradient--colors-transparency"
				            fx="25%" fy="25%">
				            <stop offset="0%"
				                  stop-color="white"/>
				            <stop offset="30%"
				                  stop-color="white"
				                  stop-opacity=".2"/>
				            <stop offset="97%"
				                  stop-color="white"
				                  stop-opacity=".4"/>
				            <stop offset="100%"
				                  stop-color="white"/>
				        </radialGradient>

				        <!-- Маска прозрачности разноцветного слоя -->
				        <mask id="mask--colors-transparency">
				            <rect fill="url(#gradient--colors-transparency)"
				              width="100%" height="100%"></rect>
				        </mask>

				        <!-- Градиент для прозрачности -->
				        <radialGradient id="gradient--bw-light" fy="10%">
				            <stop offset="60%"
				                  stop-color="white"
				                  stop-opacity="0"/>
				            <stop offset="90%"
				                  stop-color="white"
				                  stop-opacity=".25"/>
				            <stop offset="100%"
				                  stop-color="white"/>
				        </radialGradient>

				        <!-- Маска для нижнего отражения -->
				        <mask id="mask--light-bottom">
				            <rect fill="url(#gradient--bw-light)"
				                width="100%" height="100%"></rect>
				        </mask>

				        <!-- Маска для верхнего отражения -->
				        <mask id="mask--light-top">
				            <rect fill="url(#gradient--bw-light)"
				                width="100%" height="100%"
				                transform="rotate(180, 100, 100)"></rect>
				        </mask>

				        <!-- Градиент блика -->
				        <radialGradient id="gradient--spot" fy="20%">
				            <stop offset="10%"
				                  stop-color="white"
				                  stop-opacity=".7"/>
				            <stop offset="70%"
				                  stop-color="white"
				                  stop-opacity="0"/>
				        </radialGradient>
				    </defs>        

				    <!-- Нижний блик -->
				    <ellipse rx="40" ry="20" cx="150" cy="150"
				       fill="url(#gradient--spot)"
				       transform="rotate(-225, 150, 150)">
				    </ellipse>    

				    <!-- Нижнее отражение -->
				    <circle r="50%" cx="50%" cy="50%"
				        fill="white"
				        mask="url(#mask--light-bottom)">
				    </circle>

				    <!-- Верхнее отражение -->
				    <circle r="50%" cx="50%" cy="50%"
				        fill="white"
				        mask="url(#mask--light-top)">
				    </circle>


				    <!-- Верхний блик -->
				    <ellipse rx="55" ry="25" cx="55" cy="55"
				       fill="url(#gradient--spot)"
				       transform="rotate(-45, 55, 55)">
				    </ellipse>

				    <!-- Фигура с маской и разноцветным градиентом -->
				    <circle r="50%" cx="50%" cy="50%"
				        fill="url(#gradient--colors)"
				        mask="url(#mask--colors-transparency)">
				    </circle>
				</svg>

				<svg viewBox="0 0 200 200">
				    <defs>
				        <!-- Разноцветный градиент -->
				        <linearGradient id="gradient--colors"
				            x1="0" y1="100%"
				            x2="100%" y2="0">
				            <stop offset="0%"
				                stop-color="white"/>
				            <stop offset="50%"
				                stop-color="white"/>
				            <stop offset="100%"
				                stop-color="white"/>
				        </linearGradient>

				        <!-- Градиент прозрачности разноцветного слоя -->
				        <radialGradient id="gradient--colors-transparency"
				            fx="25%" fy="25%">
				            <stop offset="0%"
				                  stop-color="white"/>
				            <stop offset="30%"
				                  stop-color="white"
				                  stop-opacity=".2"/>
				            <stop offset="97%"
				                  stop-color="white"
				                  stop-opacity=".4"/>
				            <stop offset="100%"
				                  stop-color="white"/>
				        </radialGradient>

				        <!-- Маска прозрачности разноцветного слоя -->
				        <mask id="mask--colors-transparency">
				            <rect fill="url(#gradient--colors-transparency)"
				              width="100%" height="100%"></rect>
				        </mask>

				        <!-- Градиент для прозрачности -->
				        <radialGradient id="gradient--bw-light" fy="10%">
				            <stop offset="60%"
				                  stop-color="white"
				                  stop-opacity="0"/>
				            <stop offset="90%"
				                  stop-color="white"
				                  stop-opacity=".25"/>
				            <stop offset="100%"
				                  stop-color="white"/>
				        </radialGradient>

				        <!-- Маска для нижнего отражения -->
				        <mask id="mask--light-bottom">
				            <rect fill="url(#gradient--bw-light)"
				                width="100%" height="100%"></rect>
				        </mask>

				        <!-- Маска для верхнего отражения -->
				        <mask id="mask--light-top">
				            <rect fill="url(#gradient--bw-light)"
				                width="100%" height="100%"
				                transform="rotate(180, 100, 100)"></rect>
				        </mask>

				        <!-- Градиент блика -->
				        <radialGradient id="gradient--spot" fy="20%">
				            <stop offset="10%"
				                  stop-color="white"
				                  stop-opacity=".7"/>
				            <stop offset="70%"
				                  stop-color="white"
				                  stop-opacity="0"/>
				        </radialGradient>
				    </defs>        

				    <!-- Нижний блик -->
				    <ellipse rx="40" ry="20" cx="150" cy="150"
				       fill="url(#gradient--spot)"
				       transform="rotate(-225, 150, 150)">
				    </ellipse>    

				    <!-- Нижнее отражение -->
				    <circle r="50%" cx="50%" cy="50%"
				        fill="white"
				        mask="url(#mask--light-bottom)">
				    </circle>

				    <!-- Верхнее отражение -->
				    <circle r="50%" cx="50%" cy="50%"
				        fill="white"
				        mask="url(#mask--light-top)">
				    </circle>


				    <!-- Верхний блик -->
				    <ellipse rx="55" ry="25" cx="55" cy="55"
				       fill="url(#gradient--spot)"
				       transform="rotate(-45, 55, 55)">
				    </ellipse>

				    <!-- Фигура с маской и разноцветным градиентом -->
				    <circle r="50%" cx="50%" cy="50%"
				        fill="url(#gradient--colors)"
				        mask="url(#mask--colors-transparency)">
				    </circle>
				</svg>

				<svg viewBox="0 0 200 200">
				    <defs>
				        <!-- Разноцветный градиент -->
				        <linearGradient id="gradient--colors"
				            x1="0" y1="100%"
				            x2="100%" y2="0">
				            <stop offset="0%"
				                stop-color="white"/>
				            <stop offset="50%"
				                stop-color="white"/>
				            <stop offset="100%"
				                stop-color="white"/>
				        </linearGradient>

				        <!-- Градиент прозрачности разноцветного слоя -->
				        <radialGradient id="gradient--colors-transparency"
				            fx="25%" fy="25%">
				            <stop offset="0%"
				                  stop-color="white"/>
				            <stop offset="30%"
				                  stop-color="white"
				                  stop-opacity=".2"/>
				            <stop offset="97%"
				                  stop-color="white"
				                  stop-opacity=".4"/>
				            <stop offset="100%"
				                  stop-color="white"/>
				        </radialGradient>

				        <!-- Маска прозрачности разноцветного слоя -->
				        <mask id="mask--colors-transparency">
				            <rect fill="url(#gradient--colors-transparency)"
				              width="100%" height="100%"></rect>
				        </mask>

				        <!-- Градиент для прозрачности -->
				        <radialGradient id="gradient--bw-light" fy="10%">
				            <stop offset="60%"
				                  stop-color="white"
				                  stop-opacity="0"/>
				            <stop offset="90%"
				                  stop-color="white"
				                  stop-opacity=".25"/>
				            <stop offset="100%"
				                  stop-color="white"/>
				        </radialGradient>

				        <!-- Маска для нижнего отражения -->
				        <mask id="mask--light-bottom">
				            <rect fill="url(#gradient--bw-light)"
				                width="100%" height="100%"></rect>
				        </mask>

				        <!-- Маска для верхнего отражения -->
				        <mask id="mask--light-top">
				            <rect fill="url(#gradient--bw-light)"
				                width="100%" height="100%"
				                transform="rotate(180, 100, 100)"></rect>
				        </mask>

				        <!-- Градиент блика -->
				        <radialGradient id="gradient--spot" fy="20%">
				            <stop offset="10%"
				                  stop-color="white"
				                  stop-opacity=".7"/>
				            <stop offset="70%"
				                  stop-color="white"
				                  stop-opacity="0"/>
				        </radialGradient>
				    </defs>        

				    <!-- Нижний блик -->
				    <ellipse rx="40" ry="20" cx="150" cy="150"
				       fill="url(#gradient--spot)"
				       transform="rotate(-225, 150, 150)">
				    </ellipse>    

				    <!-- Нижнее отражение -->
				    <circle r="50%" cx="50%" cy="50%"
				        fill="white"
				        mask="url(#mask--light-bottom)">
				    </circle>

				    <!-- Верхнее отражение -->
				    <circle r="50%" cx="50%" cy="50%"
				        fill="white"
				        mask="url(#mask--light-top)">
				    </circle>


				    <!-- Верхний блик -->
				    <ellipse rx="55" ry="25" cx="55" cy="55"
				       fill="url(#gradient--spot)"
				       transform="rotate(-45, 55, 55)">
				    </ellipse>

				    <!-- Фигура с маской и разноцветным градиентом -->
				    <circle r="50%" cx="50%" cy="50%"
				        fill="url(#gradient--colors)"
				        mask="url(#mask--colors-transparency)">
				    </circle>
				</svg>
				
				<svg viewBox="0 0 200 200">
				    <defs>
				        <!-- Разноцветный градиент -->
				        <linearGradient id="gradient--colors"
				            x1="0" y1="100%"
				            x2="100%" y2="0">
				            <stop offset="0%"
				                stop-color="white"/>
				            <stop offset="50%"
				                stop-color="white"/>
				            <stop offset="100%"
				                stop-color="white"/>
				        </linearGradient>

				        <!-- Градиент прозрачности разноцветного слоя -->
				        <radialGradient id="gradient--colors-transparency"
				            fx="25%" fy="25%">
				            <stop offset="0%"
				                  stop-color="white"/>
				            <stop offset="30%"
				                  stop-color="white"
				                  stop-opacity=".2"/>
				            <stop offset="97%"
				                  stop-color="white"
				                  stop-opacity=".4"/>
				            <stop offset="100%"
				                  stop-color="white"/>
				        </radialGradient>

				        <!-- Маска прозрачности разноцветного слоя -->
				        <mask id="mask--colors-transparency">
				            <rect fill="url(#gradient--colors-transparency)"
				              width="100%" height="100%"></rect>
				        </mask>

				        <!-- Градиент для прозрачности -->
				        <radialGradient id="gradient--bw-light" fy="10%">
				            <stop offset="60%"
				                  stop-color="white"
				                  stop-opacity="0"/>
				            <stop offset="90%"
				                  stop-color="white"
				                  stop-opacity=".25"/>
				            <stop offset="100%"
				                  stop-color="white"/>
				        </radialGradient>

				        <!-- Маска для нижнего отражения -->
				        <mask id="mask--light-bottom">
				            <rect fill="url(#gradient--bw-light)"
				                width="100%" height="100%"></rect>
				        </mask>

				        <!-- Маска для верхнего отражения -->
				        <mask id="mask--light-top">
				            <rect fill="url(#gradient--bw-light)"
				                width="100%" height="100%"
				                transform="rotate(180, 100, 100)"></rect>
				        </mask>

				        <!-- Градиент блика -->
				        <radialGradient id="gradient--spot" fy="20%">
				            <stop offset="10%"
				                  stop-color="white"
				                  stop-opacity=".7"/>
				            <stop offset="70%"
				                  stop-color="white"
				                  stop-opacity="0"/>
				        </radialGradient>
				    </defs>        

				    <!-- Нижний блик -->
				    <ellipse rx="40" ry="20" cx="150" cy="150"
				       fill="url(#gradient--spot)"
				       transform="rotate(-225, 150, 150)">
				    </ellipse>    

				    <!-- Нижнее отражение -->
				    <circle r="50%" cx="50%" cy="50%"
				        fill="white"
				        mask="url(#mask--light-bottom)">
				    </circle>

				    <!-- Верхнее отражение -->
				    <circle r="50%" cx="50%" cy="50%"
				        fill="white"
				        mask="url(#mask--light-top)">
				    </circle>


				    <!-- Верхний блик -->
				    <ellipse rx="55" ry="25" cx="55" cy="55"
				       fill="url(#gradient--spot)"
				       transform="rotate(-45, 55, 55)">
				    </ellipse>

				    <!-- Фигура с маской и разноцветным градиентом -->
				    <circle r="50%" cx="50%" cy="50%"
				        fill="url(#gradient--colors)"
				        mask="url(#mask--colors-transparency)">
				    </circle>
				</svg>

				<svg viewBox="0 0 200 200">
				    <defs>
				        <!-- Разноцветный градиент -->
				        <linearGradient id="gradient--colors"
				            x1="0" y1="100%"
				            x2="100%" y2="0">
				            <stop offset="0%"
				                stop-color="white"/>
				            <stop offset="50%"
				                stop-color="white"/>
				            <stop offset="100%"
				                stop-color="white"/>
				        </linearGradient>

				        <!-- Градиент прозрачности разноцветного слоя -->
				        <radialGradient id="gradient--colors-transparency"
				            fx="25%" fy="25%">
				            <stop offset="0%"
				                  stop-color="white"/>
				            <stop offset="30%"
				                  stop-color="white"
				                  stop-opacity=".2"/>
				            <stop offset="97%"
				                  stop-color="white"
				                  stop-opacity=".4"/>
				            <stop offset="100%"
				                  stop-color="white"/>
				        </radialGradient>

				        <!-- Маска прозрачности разноцветного слоя -->
				        <mask id="mask--colors-transparency">
				            <rect fill="url(#gradient--colors-transparency)"
				              width="100%" height="100%"></rect>
				        </mask>

				        <!-- Градиент для прозрачности -->
				        <radialGradient id="gradient--bw-light" fy="10%">
				            <stop offset="60%"
				                  stop-color="white"
				                  stop-opacity="0"/>
				            <stop offset="90%"
				                  stop-color="white"
				                  stop-opacity=".25"/>
				            <stop offset="100%"
				                  stop-color="white"/>
				        </radialGradient>

				        <!-- Маска для нижнего отражения -->
				        <mask id="mask--light-bottom">
				            <rect fill="url(#gradient--bw-light)"
				                width="100%" height="100%"></rect>
				        </mask>

				        <!-- Маска для верхнего отражения -->
				        <mask id="mask--light-top">
				            <rect fill="url(#gradient--bw-light)"
				                width="100%" height="100%"
				                transform="rotate(180, 100, 100)"></rect>
				        </mask>

				        <!-- Градиент блика -->
				        <radialGradient id="gradient--spot" fy="20%">
				            <stop offset="10%"
				                  stop-color="white"
				                  stop-opacity=".7"/>
				            <stop offset="70%"
				                  stop-color="white"
				                  stop-opacity="0"/>
				        </radialGradient>
				    </defs>        

				    <!-- Нижний блик -->
				    <ellipse rx="40" ry="20" cx="150" cy="150"
				       fill="url(#gradient--spot)"
				       transform="rotate(-225, 150, 150)">
				    </ellipse>    

				    <!-- Нижнее отражение -->
				    <circle r="50%" cx="50%" cy="50%"
				        fill="white"
				        mask="url(#mask--light-bottom)">
				    </circle>

				    <!-- Верхнее отражение -->
				    <circle r="50%" cx="50%" cy="50%"
				        fill="white"
				        mask="url(#mask--light-top)">
				    </circle>


				    <!-- Верхний блик -->
				    <ellipse rx="55" ry="25" cx="55" cy="55"
				       fill="url(#gradient--spot)"
				       transform="rotate(-45, 55, 55)">
				    </ellipse>

				    <!-- Фигура с маской и разноцветным градиентом -->
				    <circle r="50%" cx="50%" cy="50%"
				        fill="url(#gradient--colors)"
				        mask="url(#mask--colors-transparency)">
				    </circle>
				</svg>

			</div>

			<div class="hero__decor hero__decor--two">

				<svg viewBox="0 0 200 200">
				    <defs>
				        <!-- Разноцветный градиент -->
				        <linearGradient id="gradient--colors"
				            x1="0" y1="100%"
				            x2="100%" y2="0">
				            <stop offset="0%"
				                stop-color="white"/>
				            <stop offset="50%"
				                stop-color="white"/>
				            <stop offset="100%"
				                stop-color="white"/>
				        </linearGradient>

				        <!-- Градиент прозрачности разноцветного слоя -->
				        <radialGradient id="gradient--colors-transparency"
				            fx="25%" fy="25%">
				            <stop offset="0%"
				                  stop-color="white"/>
				            <stop offset="30%"
				                  stop-color="white"
				                  stop-opacity=".2"/>
				            <stop offset="97%"
				                  stop-color="white"
				                  stop-opacity=".4"/>
				            <stop offset="100%"
				                  stop-color="white"/>
				        </radialGradient>

				        <!-- Маска прозрачности разноцветного слоя -->
				        <mask id="mask--colors-transparency">
				            <rect fill="url(#gradient--colors-transparency)"
				              width="100%" height="100%"></rect>
				        </mask>

				        <!-- Градиент для прозрачности -->
				        <radialGradient id="gradient--bw-light" fy="10%">
				            <stop offset="60%"
				                  stop-color="white"
				                  stop-opacity="0"/>
				            <stop offset="90%"
				                  stop-color="white"
				                  stop-opacity=".25"/>
				            <stop offset="100%"
				                  stop-color="white"/>
				        </radialGradient>

				        <!-- Маска для нижнего отражения -->
				        <mask id="mask--light-bottom">
				            <rect fill="url(#gradient--bw-light)"
				                width="100%" height="100%"></rect>
				        </mask>

				        <!-- Маска для верхнего отражения -->
				        <mask id="mask--light-top">
				            <rect fill="url(#gradient--bw-light)"
				                width="100%" height="100%"
				                transform="rotate(180, 100, 100)"></rect>
				        </mask>

				        <!-- Градиент блика -->
				        <radialGradient id="gradient--spot" fy="20%">
				            <stop offset="10%"
				                  stop-color="white"
				                  stop-opacity=".7"/>
				            <stop offset="70%"
				                  stop-color="white"
				                  stop-opacity="0"/>
				        </radialGradient>
				    </defs>        

				    <!-- Нижний блик -->
				    <ellipse rx="40" ry="20" cx="150" cy="150"
				       fill="url(#gradient--spot)"
				       transform="rotate(-225, 150, 150)">
				    </ellipse>    

				    <!-- Нижнее отражение -->
				    <circle r="50%" cx="50%" cy="50%"
				        fill="white"
				        mask="url(#mask--light-bottom)">
				    </circle>

				    <!-- Верхнее отражение -->
				    <circle r="50%" cx="50%" cy="50%"
				        fill="white"
				        mask="url(#mask--light-top)">
				    </circle>


				    <!-- Верхний блик -->
				    <ellipse rx="55" ry="25" cx="55" cy="55"
				       fill="url(#gradient--spot)"
				       transform="rotate(-45, 55, 55)">
				    </ellipse>

				    <!-- Фигура с маской и разноцветным градиентом -->
				    <circle r="50%" cx="50%" cy="50%"
				        fill="url(#gradient--colors)"
				        mask="url(#mask--colors-transparency)">
				    </circle>
				</svg>

				<svg viewBox="0 0 200 200">
				    <defs>
				        <!-- Разноцветный градиент -->
				        <linearGradient id="gradient--colors"
				            x1="0" y1="100%"
				            x2="100%" y2="0">
				            <stop offset="0%"
				                stop-color="white"/>
				            <stop offset="50%"
				                stop-color="white"/>
				            <stop offset="100%"
				                stop-color="white"/>
				        </linearGradient>

				        <!-- Градиент прозрачности разноцветного слоя -->
				        <radialGradient id="gradient--colors-transparency"
				            fx="25%" fy="25%">
				            <stop offset="0%"
				                  stop-color="white"/>
				            <stop offset="30%"
				                  stop-color="white"
				                  stop-opacity=".2"/>
				            <stop offset="97%"
				                  stop-color="white"
				                  stop-opacity=".4"/>
				            <stop offset="100%"
				                  stop-color="white"/>
				        </radialGradient>

				        <!-- Маска прозрачности разноцветного слоя -->
				        <mask id="mask--colors-transparency">
				            <rect fill="url(#gradient--colors-transparency)"
				              width="100%" height="100%"></rect>
				        </mask>

				        <!-- Градиент для прозрачности -->
				        <radialGradient id="gradient--bw-light" fy="10%">
				            <stop offset="60%"
				                  stop-color="white"
				                  stop-opacity="0"/>
				            <stop offset="90%"
				                  stop-color="white"
				                  stop-opacity=".25"/>
				            <stop offset="100%"
				                  stop-color="white"/>
				        </radialGradient>

				        <!-- Маска для нижнего отражения -->
				        <mask id="mask--light-bottom">
				            <rect fill="url(#gradient--bw-light)"
				                width="100%" height="100%"></rect>
				        </mask>

				        <!-- Маска для верхнего отражения -->
				        <mask id="mask--light-top">
				            <rect fill="url(#gradient--bw-light)"
				                width="100%" height="100%"
				                transform="rotate(180, 100, 100)"></rect>
				        </mask>

				        <!-- Градиент блика -->
				        <radialGradient id="gradient--spot" fy="20%">
				            <stop offset="10%"
				                  stop-color="white"
				                  stop-opacity=".7"/>
				            <stop offset="70%"
				                  stop-color="white"
				                  stop-opacity="0"/>
				        </radialGradient>
				    </defs>        

				    <!-- Нижний блик -->
				    <ellipse rx="40" ry="20" cx="150" cy="150"
				       fill="url(#gradient--spot)"
				       transform="rotate(-225, 150, 150)">
				    </ellipse>    

				    <!-- Нижнее отражение -->
				    <circle r="50%" cx="50%" cy="50%"
				        fill="white"
				        mask="url(#mask--light-bottom)">
				    </circle>

				    <!-- Верхнее отражение -->
				    <circle r="50%" cx="50%" cy="50%"
				        fill="white"
				        mask="url(#mask--light-top)">
				    </circle>


				    <!-- Верхний блик -->
				    <ellipse rx="55" ry="25" cx="55" cy="55"
				       fill="url(#gradient--spot)"
				       transform="rotate(-45, 55, 55)">
				    </ellipse>

				    <!-- Фигура с маской и разноцветным градиентом -->
				    <circle r="50%" cx="50%" cy="50%"
				        fill="url(#gradient--colors)"
				        mask="url(#mask--colors-transparency)">
				    </circle>
				</svg>

				<svg viewBox="0 0 200 200">
				    <defs>
				        <!-- Разноцветный градиент -->
				        <linearGradient id="gradient--colors"
				            x1="0" y1="100%"
				            x2="100%" y2="0">
				            <stop offset="0%"
				                stop-color="white"/>
				            <stop offset="50%"
				                stop-color="white"/>
				            <stop offset="100%"
				                stop-color="white"/>
				        </linearGradient>

				        <!-- Градиент прозрачности разноцветного слоя -->
				        <radialGradient id="gradient--colors-transparency"
				            fx="25%" fy="25%">
				            <stop offset="0%"
				                  stop-color="white"/>
				            <stop offset="30%"
				                  stop-color="white"
				                  stop-opacity=".2"/>
				            <stop offset="97%"
				                  stop-color="white"
				                  stop-opacity=".4"/>
				            <stop offset="100%"
				                  stop-color="white"/>
				        </radialGradient>

				        <!-- Маска прозрачности разноцветного слоя -->
				        <mask id="mask--colors-transparency">
				            <rect fill="url(#gradient--colors-transparency)"
				              width="100%" height="100%"></rect>
				        </mask>

				        <!-- Градиент для прозрачности -->
				        <radialGradient id="gradient--bw-light" fy="10%">
				            <stop offset="60%"
				                  stop-color="white"
				                  stop-opacity="0"/>
				            <stop offset="90%"
				                  stop-color="white"
				                  stop-opacity=".25"/>
				            <stop offset="100%"
				                  stop-color="white"/>
				        </radialGradient>

				        <!-- Маска для нижнего отражения -->
				        <mask id="mask--light-bottom">
				            <rect fill="url(#gradient--bw-light)"
				                width="100%" height="100%"></rect>
				        </mask>

				        <!-- Маска для верхнего отражения -->
				        <mask id="mask--light-top">
				            <rect fill="url(#gradient--bw-light)"
				                width="100%" height="100%"
				                transform="rotate(180, 100, 100)"></rect>
				        </mask>

				        <!-- Градиент блика -->
				        <radialGradient id="gradient--spot" fy="20%">
				            <stop offset="10%"
				                  stop-color="white"
				                  stop-opacity=".7"/>
				            <stop offset="70%"
				                  stop-color="white"
				                  stop-opacity="0"/>
				        </radialGradient>
				    </defs>        

				    <!-- Нижний блик -->
				    <ellipse rx="40" ry="20" cx="150" cy="150"
				       fill="url(#gradient--spot)"
				       transform="rotate(-225, 150, 150)">
				    </ellipse>    

				    <!-- Нижнее отражение -->
				    <circle r="50%" cx="50%" cy="50%"
				        fill="white"
				        mask="url(#mask--light-bottom)">
				    </circle>

				    <!-- Верхнее отражение -->
				    <circle r="50%" cx="50%" cy="50%"
				        fill="white"
				        mask="url(#mask--light-top)">
				    </circle>


				    <!-- Верхний блик -->
				    <ellipse rx="55" ry="25" cx="55" cy="55"
				       fill="url(#gradient--spot)"
				       transform="rotate(-45, 55, 55)">
				    </ellipse>

				    <!-- Фигура с маской и разноцветным градиентом -->
				    <circle r="50%" cx="50%" cy="50%"
				        fill="url(#gradient--colors)"
				        mask="url(#mask--colors-transparency)">
				    </circle>
				</svg>

				<svg viewBox="0 0 200 200">
				    <defs>
				        <!-- Разноцветный градиент -->
				        <linearGradient id="gradient--colors"
				            x1="0" y1="100%"
				            x2="100%" y2="0">
				            <stop offset="0%"
				                stop-color="white"/>
				            <stop offset="50%"
				                stop-color="white"/>
				            <stop offset="100%"
				                stop-color="white"/>
				        </linearGradient>

				        <!-- Градиент прозрачности разноцветного слоя -->
				        <radialGradient id="gradient--colors-transparency"
				            fx="25%" fy="25%">
				            <stop offset="0%"
				                  stop-color="white"/>
				            <stop offset="30%"
				                  stop-color="white"
				                  stop-opacity=".2"/>
				            <stop offset="97%"
				                  stop-color="white"
				                  stop-opacity=".4"/>
				            <stop offset="100%"
				                  stop-color="white"/>
				        </radialGradient>

				        <!-- Маска прозрачности разноцветного слоя -->
				        <mask id="mask--colors-transparency">
				            <rect fill="url(#gradient--colors-transparency)"
				              width="100%" height="100%"></rect>
				        </mask>

				        <!-- Градиент для прозрачности -->
				        <radialGradient id="gradient--bw-light" fy="10%">
				            <stop offset="60%"
				                  stop-color="white"
				                  stop-opacity="0"/>
				            <stop offset="90%"
				                  stop-color="white"
				                  stop-opacity=".25"/>
				            <stop offset="100%"
				                  stop-color="white"/>
				        </radialGradient>

				        <!-- Маска для нижнего отражения -->
				        <mask id="mask--light-bottom">
				            <rect fill="url(#gradient--bw-light)"
				                width="100%" height="100%"></rect>
				        </mask>

				        <!-- Маска для верхнего отражения -->
				        <mask id="mask--light-top">
				            <rect fill="url(#gradient--bw-light)"
				                width="100%" height="100%"
				                transform="rotate(180, 100, 100)"></rect>
				        </mask>

				        <!-- Градиент блика -->
				        <radialGradient id="gradient--spot" fy="20%">
				            <stop offset="10%"
				                  stop-color="white"
				                  stop-opacity=".7"/>
				            <stop offset="70%"
				                  stop-color="white"
				                  stop-opacity="0"/>
				        </radialGradient>
				    </defs>        

				    <!-- Нижний блик -->
				    <ellipse rx="40" ry="20" cx="150" cy="150"
				       fill="url(#gradient--spot)"
				       transform="rotate(-225, 150, 150)">
				    </ellipse>    

				    <!-- Нижнее отражение -->
				    <circle r="50%" cx="50%" cy="50%"
				        fill="white"
				        mask="url(#mask--light-bottom)">
				    </circle>

				    <!-- Верхнее отражение -->
				    <circle r="50%" cx="50%" cy="50%"
				        fill="white"
				        mask="url(#mask--light-top)">
				    </circle>


				    <!-- Верхний блик -->
				    <ellipse rx="55" ry="25" cx="55" cy="55"
				       fill="url(#gradient--spot)"
				       transform="rotate(-45, 55, 55)">
				    </ellipse>

				    <!-- Фигура с маской и разноцветным градиентом -->
				    <circle r="50%" cx="50%" cy="50%"
				        fill="url(#gradient--colors)"
				        mask="url(#mask--colors-transparency)">
				    </circle>
				</svg>

				<svg viewBox="0 0 200 200">
				    <defs>
				        <!-- Разноцветный градиент -->
				        <linearGradient id="gradient--colors"
				            x1="0" y1="100%"
				            x2="100%" y2="0">
				            <stop offset="0%"
				                stop-color="white"/>
				            <stop offset="50%"
				                stop-color="white"/>
				            <stop offset="100%"
				                stop-color="white"/>
				        </linearGradient>

				        <!-- Градиент прозрачности разноцветного слоя -->
				        <radialGradient id="gradient--colors-transparency"
				            fx="25%" fy="25%">
				            <stop offset="0%"
				                  stop-color="white"/>
				            <stop offset="30%"
				                  stop-color="white"
				                  stop-opacity=".2"/>
				            <stop offset="97%"
				                  stop-color="white"
				                  stop-opacity=".4"/>
				            <stop offset="100%"
				                  stop-color="white"/>
				        </radialGradient>

				        <!-- Маска прозрачности разноцветного слоя -->
				        <mask id="mask--colors-transparency">
				            <rect fill="url(#gradient--colors-transparency)"
				              width="100%" height="100%"></rect>
				        </mask>

				        <!-- Градиент для прозрачности -->
				        <radialGradient id="gradient--bw-light" fy="10%">
				            <stop offset="60%"
				                  stop-color="white"
				                  stop-opacity="0"/>
				            <stop offset="90%"
				                  stop-color="white"
				                  stop-opacity=".25"/>
				            <stop offset="100%"
				                  stop-color="white"/>
				        </radialGradient>

				        <!-- Маска для нижнего отражения -->
				        <mask id="mask--light-bottom">
				            <rect fill="url(#gradient--bw-light)"
				                width="100%" height="100%"></rect>
				        </mask>

				        <!-- Маска для верхнего отражения -->
				        <mask id="mask--light-top">
				            <rect fill="url(#gradient--bw-light)"
				                width="100%" height="100%"
				                transform="rotate(180, 100, 100)"></rect>
				        </mask>

				        <!-- Градиент блика -->
				        <radialGradient id="gradient--spot" fy="20%">
				            <stop offset="10%"
				                  stop-color="white"
				                  stop-opacity=".7"/>
				            <stop offset="70%"
				                  stop-color="white"
				                  stop-opacity="0"/>
				        </radialGradient>
				    </defs>        

				    <!-- Нижний блик -->
				    <ellipse rx="40" ry="20" cx="150" cy="150"
				       fill="url(#gradient--spot)"
				       transform="rotate(-225, 150, 150)">
				    </ellipse>    

				    <!-- Нижнее отражение -->
				    <circle r="50%" cx="50%" cy="50%"
				        fill="white"
				        mask="url(#mask--light-bottom)">
				    </circle>

				    <!-- Верхнее отражение -->
				    <circle r="50%" cx="50%" cy="50%"
				        fill="white"
				        mask="url(#mask--light-top)">
				    </circle>


				    <!-- Верхний блик -->
				    <ellipse rx="55" ry="25" cx="55" cy="55"
				       fill="url(#gradient--spot)"
				       transform="rotate(-45, 55, 55)">
				    </ellipse>

				    <!-- Фигура с маской и разноцветным градиентом -->
				    <circle r="50%" cx="50%" cy="50%"
				        fill="url(#gradient--colors)"
				        mask="url(#mask--colors-transparency)">
				    </circle>
				</svg>

				<svg viewBox="0 0 200 200">
				    <defs>
				        <!-- Разноцветный градиент -->
				        <linearGradient id="gradient--colors"
				            x1="0" y1="100%"
				            x2="100%" y2="0">
				            <stop offset="0%"
				                stop-color="white"/>
				            <stop offset="50%"
				                stop-color="white"/>
				            <stop offset="100%"
				                stop-color="white"/>
				        </linearGradient>

				        <!-- Градиент прозрачности разноцветного слоя -->
				        <radialGradient id="gradient--colors-transparency"
				            fx="25%" fy="25%">
				            <stop offset="0%"
				                  stop-color="white"/>
				            <stop offset="30%"
				                  stop-color="white"
				                  stop-opacity=".2"/>
				            <stop offset="97%"
				                  stop-color="white"
				                  stop-opacity=".4"/>
				            <stop offset="100%"
				                  stop-color="white"/>
				        </radialGradient>

				        <!-- Маска прозрачности разноцветного слоя -->
				        <mask id="mask--colors-transparency">
				            <rect fill="url(#gradient--colors-transparency)"
				              width="100%" height="100%"></rect>
				        </mask>

				        <!-- Градиент для прозрачности -->
				        <radialGradient id="gradient--bw-light" fy="10%">
				            <stop offset="60%"
				                  stop-color="white"
				                  stop-opacity="0"/>
				            <stop offset="90%"
				                  stop-color="white"
				                  stop-opacity=".25"/>
				            <stop offset="100%"
				                  stop-color="white"/>
				        </radialGradient>

				        <!-- Маска для нижнего отражения -->
				        <mask id="mask--light-bottom">
				            <rect fill="url(#gradient--bw-light)"
				                width="100%" height="100%"></rect>
				        </mask>

				        <!-- Маска для верхнего отражения -->
				        <mask id="mask--light-top">
				            <rect fill="url(#gradient--bw-light)"
				                width="100%" height="100%"
				                transform="rotate(180, 100, 100)"></rect>
				        </mask>

				        <!-- Градиент блика -->
				        <radialGradient id="gradient--spot" fy="20%">
				            <stop offset="10%"
				                  stop-color="white"
				                  stop-opacity=".7"/>
				            <stop offset="70%"
				                  stop-color="white"
				                  stop-opacity="0"/>
				        </radialGradient>
				    </defs>        

				    <!-- Нижний блик -->
				    <ellipse rx="40" ry="20" cx="150" cy="150"
				       fill="url(#gradient--spot)"
				       transform="rotate(-225, 150, 150)">
				    </ellipse>    

				    <!-- Нижнее отражение -->
				    <circle r="50%" cx="50%" cy="50%"
				        fill="white"
				        mask="url(#mask--light-bottom)">
				    </circle>

				    <!-- Верхнее отражение -->
				    <circle r="50%" cx="50%" cy="50%"
				        fill="white"
				        mask="url(#mask--light-top)">
				    </circle>


				    <!-- Верхний блик -->
				    <ellipse rx="55" ry="25" cx="55" cy="55"
				       fill="url(#gradient--spot)"
				       transform="rotate(-45, 55, 55)">
				    </ellipse>

				    <!-- Фигура с маской и разноцветным градиентом -->
				    <circle r="50%" cx="50%" cy="50%"
				        fill="url(#gradient--colors)"
				        mask="url(#mask--colors-transparency)">
				    </circle>
				</svg>

				<svg viewBox="0 0 200 200">
				    <defs>
				        <!-- Разноцветный градиент -->
				        <linearGradient id="gradient--colors"
				            x1="0" y1="100%"
				            x2="100%" y2="0">
				            <stop offset="0%"
				                stop-color="white"/>
				            <stop offset="50%"
				                stop-color="white"/>
				            <stop offset="100%"
				                stop-color="white"/>
				        </linearGradient>

				        <!-- Градиент прозрачности разноцветного слоя -->
				        <radialGradient id="gradient--colors-transparency"
				            fx="25%" fy="25%">
				            <stop offset="0%"
				                  stop-color="white"/>
				            <stop offset="30%"
				                  stop-color="white"
				                  stop-opacity=".2"/>
				            <stop offset="97%"
				                  stop-color="white"
				                  stop-opacity=".4"/>
				            <stop offset="100%"
				                  stop-color="white"/>
				        </radialGradient>

				        <!-- Маска прозрачности разноцветного слоя -->
				        <mask id="mask--colors-transparency">
				            <rect fill="url(#gradient--colors-transparency)"
				              width="100%" height="100%"></rect>
				        </mask>

				        <!-- Градиент для прозрачности -->
				        <radialGradient id="gradient--bw-light" fy="10%">
				            <stop offset="60%"
				                  stop-color="white"
				                  stop-opacity="0"/>
				            <stop offset="90%"
				                  stop-color="white"
				                  stop-opacity=".25"/>
				            <stop offset="100%"
				                  stop-color="white"/>
				        </radialGradient>

				        <!-- Маска для нижнего отражения -->
				        <mask id="mask--light-bottom">
				            <rect fill="url(#gradient--bw-light)"
				                width="100%" height="100%"></rect>
				        </mask>

				        <!-- Маска для верхнего отражения -->
				        <mask id="mask--light-top">
				            <rect fill="url(#gradient--bw-light)"
				                width="100%" height="100%"
				                transform="rotate(180, 100, 100)"></rect>
				        </mask>

				        <!-- Градиент блика -->
				        <radialGradient id="gradient--spot" fy="20%">
				            <stop offset="10%"
				                  stop-color="white"
				                  stop-opacity=".7"/>
				            <stop offset="70%"
				                  stop-color="white"
				                  stop-opacity="0"/>
				        </radialGradient>
				    </defs>        

				    <!-- Нижний блик -->
				    <ellipse rx="40" ry="20" cx="150" cy="150"
				       fill="url(#gradient--spot)"
				       transform="rotate(-225, 150, 150)">
				    </ellipse>    

				    <!-- Нижнее отражение -->
				    <circle r="50%" cx="50%" cy="50%"
				        fill="white"
				        mask="url(#mask--light-bottom)">
				    </circle>

				    <!-- Верхнее отражение -->
				    <circle r="50%" cx="50%" cy="50%"
				        fill="white"
				        mask="url(#mask--light-top)">
				    </circle>


				    <!-- Верхний блик -->
				    <ellipse rx="55" ry="25" cx="55" cy="55"
				       fill="url(#gradient--spot)"
				       transform="rotate(-45, 55, 55)">
				    </ellipse>

				    <!-- Фигура с маской и разноцветным градиентом -->
				    <circle r="50%" cx="50%" cy="50%"
				        fill="url(#gradient--colors)"
				        mask="url(#mask--colors-transparency)">
				    </circle>
				</svg>

				<svg viewBox="0 0 200 200">
				    <defs>
				        <!-- Разноцветный градиент -->
				        <linearGradient id="gradient--colors"
				            x1="0" y1="100%"
				            x2="100%" y2="0">
				            <stop offset="0%"
				                stop-color="white"/>
				            <stop offset="50%"
				                stop-color="white"/>
				            <stop offset="100%"
				                stop-color="white"/>
				        </linearGradient>

				        <!-- Градиент прозрачности разноцветного слоя -->
				        <radialGradient id="gradient--colors-transparency"
				            fx="25%" fy="25%">
				            <stop offset="0%"
				                  stop-color="white"/>
				            <stop offset="30%"
				                  stop-color="white"
				                  stop-opacity=".2"/>
				            <stop offset="97%"
				                  stop-color="white"
				                  stop-opacity=".4"/>
				            <stop offset="100%"
				                  stop-color="white"/>
				        </radialGradient>

				        <!-- Маска прозрачности разноцветного слоя -->
				        <mask id="mask--colors-transparency">
				            <rect fill="url(#gradient--colors-transparency)"
				              width="100%" height="100%"></rect>
				        </mask>

				        <!-- Градиент для прозрачности -->
				        <radialGradient id="gradient--bw-light" fy="10%">
				            <stop offset="60%"
				                  stop-color="white"
				                  stop-opacity="0"/>
				            <stop offset="90%"
				                  stop-color="white"
				                  stop-opacity=".25"/>
				            <stop offset="100%"
				                  stop-color="white"/>
				        </radialGradient>

				        <!-- Маска для нижнего отражения -->
				        <mask id="mask--light-bottom">
				            <rect fill="url(#gradient--bw-light)"
				                width="100%" height="100%"></rect>
				        </mask>

				        <!-- Маска для верхнего отражения -->
				        <mask id="mask--light-top">
				            <rect fill="url(#gradient--bw-light)"
				                width="100%" height="100%"
				                transform="rotate(180, 100, 100)"></rect>
				        </mask>

				        <!-- Градиент блика -->
				        <radialGradient id="gradient--spot" fy="20%">
				            <stop offset="10%"
				                  stop-color="white"
				                  stop-opacity=".7"/>
				            <stop offset="70%"
				                  stop-color="white"
				                  stop-opacity="0"/>
				        </radialGradient>
				    </defs>        

				    <!-- Нижний блик -->
				    <ellipse rx="40" ry="20" cx="150" cy="150"
				       fill="url(#gradient--spot)"
				       transform="rotate(-225, 150, 150)">
				    </ellipse>    

				    <!-- Нижнее отражение -->
				    <circle r="50%" cx="50%" cy="50%"
				        fill="white"
				        mask="url(#mask--light-bottom)">
				    </circle>

				    <!-- Верхнее отражение -->
				    <circle r="50%" cx="50%" cy="50%"
				        fill="white"
				        mask="url(#mask--light-top)">
				    </circle>


				    <!-- Верхний блик -->
				    <ellipse rx="55" ry="25" cx="55" cy="55"
				       fill="url(#gradient--spot)"
				       transform="rotate(-45, 55, 55)">
				    </ellipse>

				    <!-- Фигура с маской и разноцветным градиентом -->
				    <circle r="50%" cx="50%" cy="50%"
				        fill="url(#gradient--colors)"
				        mask="url(#mask--colors-transparency)">
				    </circle>
				</svg>

			</div>

		</div>
	</section>

	<section class="advantages">
		<div class="advantages__container container">

			<div class="advantages__content">
				<b>Our benefits</b>
				<h2>Why Choose Us?</h2>
				<p>
					We provide lightning fast customer service, organic using only eco sustainable quality
					cleaning products, pricing that beats the competitors and 100% satisfaction guarantee every
					time!
				</p>
			</div>

			<div class="advantages__list">

				<div class="advantages__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/advantages-icon-1.png" alt="">
					<h3>Certified Professional Cleaners
					</h3>
					<p>
						The staff consists of qualified employees who have been specialty trained. We are ready
						to assist you any time.
					</p>
				</div>

				<div class="advantages__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/advantages-icon-2.png" alt="">
					<h3>100% Satisfaction Guaranteed</h3>
					<p>
						Our work is fully guaranteed. If you are ever unhappy with our work quality, we will try to fix anything not done right.
					</p>
				</div>

				<div class="advantages__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/advantages-icon-3.png" alt="">
					<h3>Available Evenings & Weekends </h3>
					<p>
						Convenient scheduling around your busy schedule. Cleaning will not violate your plans - choose the most opportune time.
					</p>
				</div>

				<div class="advantages__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/advantages-icon-1.png" alt="">
					<h3>Environmentally Friendly Cleaning</h3>
					<p>
						Safe cleaning products ensures a healthy environment for your family. We use eco-friendly household chemicals only.
					</p>
				</div>
			</div>

		</div>
	</section>

	<section class="services">
		<div class="services__container container">

			<div class="services__item services__title">
				<b>What we offer</b>
				<h2>Our Services</h2>
				<p>
					We clean everything from small offices to large commercial buildings. All of our
					cleaners
					are people who are trained and closely monitored by us.
				</p>
			</div>

			<?php if( have_rows('our_services') ): ?>
				<?php while( have_rows('our_services') ): the_row(); 
					$title = get_sub_field('title');
					$img = get_sub_field('img');
					$text = get_sub_field('text');
					$link = get_sub_field('link');
					?>

					<div class="services__item">
						<div class="services__item_wrap">
							<img src="<?php echo $img; ?>" alt="">
							<h3><?php echo $title; ?></h3>
						</div>
						<div class="services__backsite">
							<h3><?php echo $title; ?></h3>
							<?php echo $text; ?>
							<a href="<?php echo $link; ?>" class="btn services__btn">Get a Quote</a>
						</div>
					</div>		

				<?php endwhile; ?>
			<?php endif; ?>

		</div>
	</section>
	
	<section class="work">
		<div class="work__container container">

			<div class="work__content">
				<div class="work__title">
					<h2>Our Work</h2>
					<p>
						We’re honored that hundreds of families have invited us into their homes to clean and
						help simplify their daily lives
					</p>
				</div>
				<!-- Add Pagination -->
				<div class="work__pagination pagination"></div>
				<!-- Add Arrows -->
				<div class="work__button-next button-next"></div>
				<div class="work__button-prev button-prev"></div>
			</div>

			<div class="work__slider swiper-container">
				<div class="swiper-wrapper">

					<?php if( have_rows('work') ): ?>
						<?php while( have_rows('work') ): the_row(); 
							$img_before = get_sub_field('img_before');
							$img_after = get_sub_field('img_after');
							?>

							<div class="swiper-slide">
								<p>
									<span>Before</span>
									<span>After</span>
								</p>
								<div id="container1" class="twentytwenty-container">
									<img src="<?php echo $img_before; ?>" alt="">
									<img src="<?php echo $img_after; ?>" alt="">
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>

				</div>
			</div>

		</div>
	</section>

	<section class="reviews">
		<div class="reviews__container container">

			<div class="reviews__content">
				<div class="reviews__title">
					<b>What people say about us</b>
					<h2>Reviews</h2>
					<p>Real rewievs from real happy clients</p>
				</div>
				<!-- Add Pagination -->
				<div class="reviews__pagination pagination"></div>
				<!-- Add Arrows -->
				<div class="reviews__button-next button-next"></div>
				<div class="reviews__button-prev button-prev"></div>
			</div>

			<div class="reviews__slider swiper-container">
				<div class="swiper-wrapper">

					<?php if( have_rows('reviews') ): ?>
						<?php while( have_rows('reviews') ): the_row(); 
							$text = get_sub_field('text');
							$name = get_sub_field('name');
							?>
							
							<div class="swiper-slide">
								<p class="reviews__comments">
									<?php echo $text; ?>
								</p>
								<b class="reviews__name">
									<?php echo $name; ?>
								</b>
							</div>

						<?php endwhile; ?>
					<?php endif; ?>

				</div>
			</div>

		</div>
	</section>

	<section class="contacts">
		<div class="contacts__container container">

			<div class="contacts__content">
				<b>what are you waiting for?</b>
				<h2>Contact Us For a Free Quote!</h2>
				<p>
					If you have any questions or you’d like
					<br> to enquire about our services, we’re
					<br> happy to help!
				</p>
			</div>

			<div class="contacts__form">
				<?php echo do_shortcode( '[contact-form-7 id="97" title="Форма"]' ); ?>
			</div>

		</div>
	</section>


<?php get_footer(); ?>