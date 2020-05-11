<?php

class layout_elements_slide_1 extends layout
{

    private $carousel;

    function __construct( data_array $carousel )
    {

        $this->carousel = $carousel;

    }

    function render()
    {
        echo '
	<!-- Featured Slide Start -->
	<section id="fp-container" class="clearfix">
		<div class="container">
			<div class="row">
				<div class="feuture-posts">
					<!-- Slider Start -->
					<div class="col-sm-6 big-section">
						<div class="fbt-slide-nav">
							<span class="fbt-slide-pager"></span>
						</div>
						<div class="fp-slides">';

                            $item = $this->carousel->first();
                            if( $item ) $this->largerBox( $item );

                            $item = $this->carousel->first();
                            if( $item ) $this->largerBox( $item );

                            $item = $this->carousel->first();
                            if( $item ) $this->largerBox( $item );

						echo
						'</div>',
						'<nav class="nav-growpop">',
							'<div>',
								'<a class="fp-prev" href="#fp-prev"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i></a>',
								'<a class="fp-next" href="#fp-next"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>',
							'</div>',
						'</nav>',
					'</div><!-- Slider End -->',
					//<!-- Slide Small Start -->
					'<div class="col-sm-6 small-section">';

                        $item = $this->carousel->first();
                        if( $item ) $this->middleBox( $item );

                        echo
						'<div class="row">',
							'<div class="fp-small">';

                                $item = $this->carousel->first();
                                if( $item ) $this->smallBox( $item );

                                $item = $this->carousel->first();
                                if( $item ) $this->smallBox( $item );

                            echo
							'</div>',
						'</div>',
					'</div>',
                    //<!-- Slide Small End -->
				'</div>',
			'</div>',
		'</div>',
	'</section>';
	//<!-- Featured Slide End -->

    }

    private function largerBox( data_news_article $item )
    {

        echo
        '<div class="img-thumb">',
            '<a href="', $item->link(), '">',
                '<div class="fbt-resize" style="background-image: url(', constant::IMAGES_DOMAIN, $item->image1, ')"></div>',
            '</a>',
            '<div class="img-credits">',
                '<a class="post-category" href="', $item->category->link(), '">', $item->category->category, '</a>',
                '<a href="', $item->link(), '"><h3>', $item->title, '</h3></a>',
                '<div class="post-info">',
                    '<span>', $item->dateForDisplay( $item->date ), '</span>',
                    //'<span><a href="#">Mark Spenser</a></span>',
                '</div>',
            '</div>',
        '</div>';

    }

    private function middleBox( data_news_article $item )
    {

        echo
        '<div class="img-thumb first">',
            '<a href="', $item->link(), '">',
                '<div class="fbt-resize" style="background-image: url(', constant::IMAGES_DOMAIN, $item->image1, ')"></div>',
            '</a>',
            '<div class="img-credits">',
                '<a class="post-category" href="', $item->category->link(), '">', $item->category->category, '</a>',
                '<a href="', $item->link(), '"><h3>', $item->title, '</h3></a>',
                '<div class="post-info">',
                    '<span>', $item->dateForDisplay( $item->date ), '</span>',
                '</div>',
            '</div>',
        '</div>';

    }

    private function smallBox( data_news_article $item )
    {

        echo
        '<div class="col-xs-6 last-small">',
            '<div class="img-thumb">',
                '<a href="', $item->link(), '">',
                    '<div class="fbt-resize" style="background-image: url(', constant::IMAGES_DOMAIN, $item->image1, ')"></div>',
                '</a>',
                '<div class="img-credits">',
                    '<a class="post-category" href="', $item->category->link(), '">', $item->category->category, '</a>',
                    '<a href="', $item->link(), '"><h3>', $item->title, '</h3></a>',
                    '<div class="post-info">',
                        '<span>', $item->dateForDisplay( $item->date ), '</span>',
                    '</div>',
                '</div>',
            '</div>',
        '</div>';

    }

}