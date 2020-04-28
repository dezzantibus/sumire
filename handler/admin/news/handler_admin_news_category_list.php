<?php

class handler_admin_news_category_list extends handler
{

    public function run()
    {

        /*

        stuff copy/pasted
        left as reference

        $article = model_article::getByRouting(
            $this->data['routing'],
            $this->data['parent']
        );

        $article->journalist = model_journalist::getById( $article->journalist_id );

        $header  = $this->getHeaderData( $article );
        $footer  = $this->getFooterData();
        $sidebar = $this->getSidebarData( $article->category, $article );

        model_hit::log( $article );

        $comments = model_comment::getForArticle( $article->id );

        $related = model_article::getRelated( $article->id );

        */

        $categories = model_news_category::getFullList();

        // Render page
        $page = new layout_admin_news_category_list( $categories );
        $page->render();

    }

}