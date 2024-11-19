<div class="header__bottom">
	<div class="container">
		<div class="header__bottom-wrapper">
			<div class="header__bottom-mid">
				<div class="header__bottom-left">
					<a href="/" class="header__logo">
						<img src="{{ asset('assets/images/logo.svg') }}" alt="logo"/>
					</a>
					<div class="header__bottom-search">
						<x-header_search>

						</x-header_search>
					</div>

				</div>
				<div class="header__bottom-right">
					<ul class="header__items">
						<li class="header__item">

							<a href="/delayed/" class="header__nav-link">
								<div class="icon-wrapper">
									<img src="{{ asset('assets/images/Bookmark.svg') }}" alt="logo"/>
								</div>
								<span>Отложено</span>
							</a>
						</li>
						<li class="header__item" >
							<a href="/personal/" class="header__nav-link auth">
								<div class="icon-wrapper">
									<img src="{{ asset('assets/images/User.svg') }}" alt="logo"/>

								</div>
								<span>Войти</span>
							</a>
						</li>
						<li class="header__item">
							<a href="/cart/" class="header__nav-link">
								<div class="header__item-icon">
									<img src="{{ asset('assets/images/Cart.svg') }}" alt="logo"/>

								</div>
								<span>Корзина</span>
							</a>
						</li>
					</ul>
				</div>

			</div>

			<div class="header__bottom-bot">
				<x-header_nav></x-header_nav>
			</div>

		</div>
	</div>
</div>
