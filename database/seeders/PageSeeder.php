<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Page;
use App\Models\PageMeta;

class PageSeeder extends Seeder
{
    public function run()
    {
        // Array of pages to create
        $pages = [
            [
                'slug' => 'home',
                'language' => 'en',
                'title' => 'Home',
                'content' => 'Welcome to the home page.',
                'seo_title' => 'Home - Marinarch',
                'seo_description' => 'Welcome to Marinarch - Home page.',
                'seo_keywords' => 'Home, Marinarch',
                'layout' => 'home',
                'is_active' => true,
                'company_id' => 1,
                'meta' => [],
            ],
            [
                'slug' => 'about-us',
                'language' => 'en',
                'title' => 'About Us',
                'content' => 'This is the about us page content.',
                'seo_title' => 'About Us - Marinarch',
                'seo_description' => 'Learn more about Marinarch.',
                'seo_keywords' => 'about us, Marinarch',
                'layout' => 'about',
                'is_active' => true,
                'company_id' => 2,
                'meta' => [],
            ],
            [
                'slug' => 'services',
                'language' => 'en',
                'title' => 'Services',
                'content' => 'This is the Services page content.',
                'seo_title' => 'Services - Marinarch',
                'seo_description' => 'Learn more about Marinarch.',
                'seo_keywords' => 'Services, Marinarch',
                'layout' => 'services',
                'is_active' => true,
                'company_id' => 2,
                'meta' => [],
            ],
            [
                'slug' => 'highlights',
                'language' => 'en',
                'title' => 'Highlights',
                'content' => 'This is the highlights page content.',
                'seo_title' => 'Highlights - Marinarch',
                'seo_description' => 'Learn more about Marinarch.',
                'seo_keywords' => 'Highlights, Marinarch',
                'layout' => 'highlights',
                'is_active' => true,
                'company_id' => 2,
                'meta' => [],
            ]                                         
        ];

        // Loop through the pages and create them with metadata
        foreach ($pages as $pageData) {
            $metaData = $pageData['meta'];
            unset($pageData['meta']); // Remove meta data from the main array

            // Create the page
            $page = Page::create($pageData);

            // Add metadata for the page
            
            foreach ($metaData as $meta) {
                if(!empty($meta)) {
                    PageMeta::create([
                        'page_id' => $page->id,
                        'meta_key' => $meta['meta_key'],
                        'meta_value' => $meta['meta_value'],
                    ]);
                }
            }
        }
    }
}