@extends('layouts.clientLayout')

@section('content')

<main>

    <!-- Navigation Bar -->
    <section class="navigation-bar">
        <div class="navigation-bar__container">
            <div class="navigation-bar__category">
                <ul class="navigation-bar__category-list clearfix">
                    <li class="navigation-bar__category-list-item"><a href="/information">Information</a></li>
                    <li class="navigation-bar__category-list-item"><a href="/intermezzo">Intermezzo</a></li>
                    <li class="navigation-bar__category-list-item"><a href="/tips-and-trick">Tips & Trick</a></li>
                    <li class="navigation-bar__category-list-item"><a href="/hardware">Hardware</a></li>
                    <li class="navigation-bar__category-list-item"><a href="/software">Software</a></li>
                    <li class="navigation-bar__category-list-item"><a href="/tutorials">Tutorials</a></li>
                    <li class="navigation-bar__category-list-item"><a href="/tutorials">Event</a></li>
                    <li class="navigation-bar__category-list-item"><a href="/tutorials">UKM</a></li>
                    <li class="navigation-bar__category-list-item"><a href="/tutorials">Announcement</a></li>
                    <li class="navigation-bar__category-list-item"><a href="/tutorials">Akademik</a></li>
                </ul>
            </div>
            <div class="navigation-bar__category-collapse-button-container">
                <a href="javascript:void(0)" class="navigation-bar__category-collapse-button">
                    <span class="navigation-bar__collapse-button-icon">
                        <div class="navigation-bar__collapse-button-icon__middle"></div>
                    </span>
                    <span class="navigation-bar__collapse-button-text">Pilih Kategori</span>
                </a>
            </div>
            <div class="navigation-bar__search">
                <form action="">
                    <div class="navigation-bar__search-content">
                        <input type="text" name="search" placeholder="Search" class="navigation-bar__search-input">
                    </div>
                </form>
            </div>
        </div>
    </section>


    <!-- Breadcrumbs -->
    <ul class="breadcrumbs">
    	<li class="breadcrumbs__breadcrumb-item">
    		<div class="breadcrumbs__breadcrumb-item__breadcrumb-item-container">
    			<a class="breadcrumbs__breadcrumb-item__breadcrumb-item-container__breadcrumb-link" href="/">
    				Home
    			</a>
    			<span class="breadcrumbs__breadcrumb-item__breadcrumb-item-container__breadcrumb-item-separator"></span>
    		</div>
    	</li>
    	<li class="breadcrumbs__breadcrumb-item">
    		<div class="breadcrumbs__breadcrumb-item__breadcrumb-item-container">
    			<a class="breadcrumbs__breadcrumb-item__breadcrumb-item-container__breadcrumb-link" href="#">Intermezzo</a>
    			<span class="breadcrumbs__breadcrumb-item__breadcrumb-item-container__breadcrumb-item-separator"></span>
    		</div>
    	</li>
        <li class="breadcrumbs__breadcrumb-item">
            <div class="breadcrumbs__breadcrumb-item__breadcrumb-item-container">
                <a class="breadcrumbs__breadcrumb-item__breadcrumb-item-container__breadcrumb-link" href="#">Framework Laravel Milik Pras adalah Framework Terburuk Tahun 2018, Anda Pemakainya?</a>
                <span></span>
            </div>
        </li>
    </ul>

    <!-- Post Detai. -->


    <!-- Share -->


    <!-- Related Posts -->
    <div class="related-posts">
        <div class="related-posts--container">
            <div class="related-posts--container__column">
                <a href="#" class="related-posts--container__column__link">
                    <div class="related-posts--container__column__link__images">
                        <div class="related-posts--container__column__link__images__centered">
                            <img src="images/no2.jpg">
                        </div>
                    </div>

                    <div class="related-posts--container__column__link__title">
                        UKM dance primakara adakan lari marathon keliling dunia 
                        primakara adakan lari marathon keliling dunia
                    </div>

                </a>
                <div class="related-posts--container__column__date">
                    <span class="related-posts--container__column__date__author">susano'o naruto</span> - 
                    <span class="related-posts--container__column__date__detail">2 jan 2019</span>
                </div>
            </div>

            <div class="related-posts--container__column">
                <a href="#" class="related-posts--container__column__link">
                    <div class="related-posts--container__column__link__images">
                        <div class="related-posts--container__column__link__images__centered">
                            <img src="images/no2.jpg">
                        </div>
                    </div>

                    <div class="related-posts--container__column__link__title">
                    UKM dance primakara adakan lari marathon keliling dunia 
                        primakara adakan lari marathon keliling dunia
                    </div>
                </a>
                <div class="related-posts--container__column__date">
                    <span class="related-posts--container__column__date__author">susano'o naruto</span> - 
                    <span class="related-posts--container__column__date__detail">2 jan 2019</span>
                </div>
            </div>

            <div class="related-posts--container__column">
                <a href="#" class="related-posts--container__column__link">
                    <div class="related-posts--container__column__link__images">
                        <div class="related-posts--container__column__link__images__centered">
                            <img src="images/no1.jpg">
                        </div>
                    </div>

                    <div class="related-posts--container__column__link__title">
                        UKM dance primakara adakan lari marathon keliling dunia 
                        primakara adakan lari marathon keliling dunia
                    </div>
                </a>
                <div class="related-posts--container__column__date">
                    <span class="related-posts--container__column__date__author">susano'o naruto</span> - 
                    <span class="related-posts--container__column__date__detail">2 jan 2019</span>
                </div>
            </div>
        </div>
    </div>


</main>

@endsection

@section('additional-scripts')

<script src="{{ mix('js/navigation-bar.js') }}"></script>

@endsection
