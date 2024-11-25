<nav class="header__nav">
	<ul class="header__nav-list" id="horizontal-multilevel-menu">
		<li class="header__nav-item selected">
			<a href="{{ route('catalog') }}" class="header__nav-link">
				<span class="icon-wrapper catalog-icon">
					<img class="catalog-icon--icon_1" src="{{ asset('assets/images/catalog_logo_stripes.svg') }}" alt="logo"/>
					<img class="catalog-icon--icon_2" src="{{ asset('assets/images/catalog_logo_middle_stripe.svg') }}" alt="logo"/>
				</span>
				<span class="header__nav-link--text">Каталог</span>
			</a>
		</li>
		<li class="header__nav-item selected">
			<a href="{{ route('authors') }}" class="header__nav-link">Авторы</a>
		</li>
		<li class="header__nav-item selected">
			<a href="{{ route('new') }}" class="header__nav-link">Новинки</a>
		</li>
		<li class="header__nav-item selected">
			<a href="{{ route('sale') }}" class="header__nav-link red">
				<span class="icon-wrapper sale-icon">
					<img class="catalog-icon--icon_1" src="{{ asset('assets/images/Sale.svg') }}" alt="">
				</span>
				Скидки
			</a>
		</li>
		<li class="header__nav-item selected">
			<a href="{{ route('partners') }}" class="header__nav-link">Партнёрам</a>
		</li>
		<li class="header__nav-item selected">
			<a href="{{ route('about') }}" class="header__nav-link">Мы</a>
		</li>
	</ul>
</nav>
