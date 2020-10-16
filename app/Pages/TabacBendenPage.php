<?php

class TabacBendenPage extends \Page {

    protected function RenderContent() : string {
        return
            $this->RenderIntroduction()
            . $this->RenderArchitecture()
            . $this->RenderBranding()
            . AnnotationHelper::RenderList()
        ;     
    }

    protected function getTitle() : string {
        return 'Working experience at Tabac Benden GmbH';
    }

    protected function getMetaDescription() : string {
        return 'I was the head of research and development at Tabac Benden in Düsseldorf. It was almost my dream job.';
    }

    private function RenderIntroduction() : string {
        return $this->RenderContainer(
                'tabac-benden-introduction',
            
                '<h1>Tabac Benden</h1>'
                . '<p>Tabac Benden GmbH is one of the biggest retailers of premium tobacco products in Europe.</p>'
                . '<p>'
                . 'After taking care of '. _ELink('the main project', 'https://www.cigarworld.de').' for around 15 years I began in 2015 my new job as head '
                . 'of the new research and development department. My first duty was to relaunch the unsuccessfull La Casa del Habano franchise shop and '
                . 'create a plattform that allowed to add new shops fast.'
                . '</p>'
                . '<p>This is the list of projects we created:</p>'
                . $this->RenderProjects()
                . '<p>Let me show you some highlights.</p>'
        );
    }
    
    private function RenderProjects() {
        return '<ul>'
                . '<li>'._ELink('Casa Benden - La Casa del Habano franchise shop', 'https://www.casabenden.de').'</li>'
                . '<li>'._ELink('Pipe Republic - A shop for pipe for enthusiast', 'https://www.pipe-republic.de').'</li>'
                . '<li>'._ELink('Casa de Alegria - Cigar Brand', 'https://www.casadealegria.de').'</li>'
                . '<li>'._ELink('Cigarren.de - Wholesale for premium-tobacco', 'https://www.cigarren.de').'</li>'
                . '<li>'._ELink('CasaBenden.com - cigar shop in chinese language', 'https://www.casabenden.com').'</li>'
                . '</ul>'
        ;
    }

    private function RenderArchitecture(): string {
        return $this->RenderContainer(
                        'tabac-benden-architecture',
                        '<h2>A framework based on a conference workshop</h2>'
                        . '<p>Yes. I created a framework based on a conference workshop by '
                        . _ELink('thePHP.cc', 'https://www.thePHP.cc').'. '
                        . 'Let me explain why I went this route.</p>'
                        
                        . '<h3>The problem:</h3>'
                        . '<p>My first task was to replace an non-performing La Casa del Habano franchise shop based on magento. '
                        . 'The market enviroment is a highly competitive one. '
                        . 'All competitors had the same assortment of goods, advantages in branding and Google-Ranking. '
                        . 'One chance to stand out, was to create a better shopping experience starting with lower loading times.'
                        . '</p>'
                        . '<p> In early 2015 no other standard shop-software met the demands. '
                        . 'The so called ”MVC” '
                        . AnnotationHelper::Add('It is a debateble if you can call the architecture of frameworks in the min 2000s "model-view-controller". It has nothing to do with the original concept and use-case. Still it was a common used term.')
                        . ' pattern common at that time was just too slow.'
                        . '</p>'
                        
                        . '<h3>The solution:</h3>'
                        . '<p>I started programming a new shop software. '
                        . 'The idea was simple: Create an event-driven architecture to pre-render all '
                        . 'category, brand, product-line, product and content pages. '
                        . '</p>'
                        . '<p>To filter the search results we used an proper search-engine and displayed pre-rendered '
                        . 'result-partials.</p>'
                        
                        . '<h3>The result:</h3>'
                        . '<p>These pages render in around 250ms. Two month after the launch of www.casabenden.de '
                        . 'the shop reached the same sales-count as in the entire three years before. '
                        . 'While the load-times are only one factor, we where on the right way.'
                        . '</p>'
        );
    }

    private function RenderBranding() : string {
        return $this->RenderContainer(
                'tabac-benden-branding',
                '<h2>Branding</h2>'
                . '<p>Branding beginns with the domain name.  '
                . 'Since browsers send syntactly uncorrect urls directly to an search engine'
                . AnnotationHelper::Add('I would write google, but technicly there is Microsoft Edge and Bing')
                . ' most people don´t type the complete url anymore.'
                . '</p>'
                . '<p>A good method to loose your customer is to have an domain name just like your competitor. '
                . 'Tabac Benden was no exception. They have the license to use the franchise name La Casa del Habano. '
                . 'So for their shop they did what most other shop owners did. They shoved around the words in order to find a free domain '
                . 'and came up with casahabano.com. I knew that the search results would distract the audience. '
                . 'So one of the measures to ensure success was to re-direct the url to casabenden.de and use this name in new marketing materials. '
                . '</p>'
                . '<p>Search console showed that a good portion of traffic comes from people searching variants of "Casa Benden". The change of the domain name had a direct impact on the success of the first projects.</p>'
        );
    }

}