<?php

class JallenController extends BaseController
{
    
    /*controller for the following pages:
     * Home Page (main page, index)
     * About Page
     * Products Page
     * Gear Page
     * Events Page
     */
    
    
    /*     ABOUT     */
    
    
    public function showMain()
    {
        
        return View::make('main');
    }
    
    
    public function showAboutUs()
    {
        
        return View::make('about_us');
    }
    
    public function showAboutProduct()
    {
        
        return View::make('about_product');
    }
    
    
    /*     PRODUCTS     */
    
    public function showProductsBeer()
    {
        return View::make('products_beer');
    }
    
    public function showProductsBrandy()
    {
        return View::make('products_brandy');
    }
    
    public function showProductsCognac()
    {
        return View::make('products_cognac');
    }
    
    public function showProductsRum()
    {
        return View::make('products_rum');
    }
    
    public function showProductsVodka()
    {
        return View::make('products_vodka');
    }
    
    
    
    
}
