<div class="header__top">
	<div class="container">
		<div class="header__top-wrapper">
			<div class="header__top-left">
				<ul class="header__top-items header__items">
					<li class="header__top-item header__top-location header__item">
						<x-geoloc></x-geoloc>
					</li>
					<li class="header__top-item header__top-delivery header__item">
						<a href="/delivery-payment/" class="header__nav-link">
							<div class="icon-wrapper">
								<img src="{{ asset('assets/images/Shippings.svg') }}" alt="">
							</div>
							<span>Доставка и оплата</span>
						</a>
					</li>
					<li class="header__top-item header__top-address header__item">
						<a href="/address/" class="header__nav-link">
							<div class="icon-wrapper">
								<img src="{{ asset('assets/images/Shopping.svg') }}" alt="">
							</div>
							<span>Адрес и часы работы</span>
						</a>
					</li>
				</ul>
			</div>
			<div class="header__top-right">
				<ul class="header__top-items header__items">
					<li class="header__top-item header__top-email header__item">
						<a href="mailto:market@estatut.ru" class="header__nav-link">
							<div class="icon-wrapper">
								<img src="{{ asset('assets/images/Mail.svg') }}" alt="">
							</div>
							<span>market@estatut.ru</span>
						</a>
					</li>
					<li class="header__top-item header__top-phone header__item">
						<a href="tel:8 (968) 660-65-50" class="header__nav-link">
							<div class="icon-wrapper">
								<img src="{{ asset('assets/images/Phone.svg') }}" alt="">
							</div>
							<span>8 (968) 660-65-50</span>
						</a>
						<a href="" class="header__nav-link info-link">
							<div class="icon-wrapper info-icon">
								<img src="{{ asset('assets/images/Info.svg') }}" alt="">
							</div>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
