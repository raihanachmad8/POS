<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $category;
    private $product;
    public function __construct()
    {
        $this->category = [
            [
                'id' => 1,
                'name' => 'Snack',
                'name_url' => 'snack',
            ],
            [
                'id' => 2,
                'name' => 'Food & Beverage',
                'name_url' => 'food-beverage',
            ],
            [
                'id' => 3,
                'name' => 'Beauty & Health',
                'name_url' => 'beauty-health',
            ],
            [
                'id' => 4,
                'name' => 'Home Care',
                'name_url' => 'home-care',
            ],
            [
                'id' => 5,
                'name' => 'Baby & Kid',
                'name_url' => 'baby-kid',
            ],
            [
                'id' => 6,
                'name' => 'Fashion',
                'name_url' => 'fashion',
            ],
        ];

        $this->product = [
            [
                'id' => 1,
                'name' => 'Chitato',
                'image' => 'assets/images/Snack/citato.jpg',
                'price' => 8000,
                'description' => 'Chitato is a brand of potato chips',
                'category_id' => 1,
                'discount' => 0,
                'stock' => 100,
                'rating' => 5,
                'sold_item' => 50,
            ],
            [
                'id' => 2,
                'name' => 'Baby Diapers',
                'image' => 'assets/images/BabyKid/babydiapers.jpg',
                'price' => 8000,
                'description' => 'Baby Diapers is a brand for baby pee and poo',
                'category_id' => 5,
                'discount' => 0,
                'stock' => 100,
                'rating' => 4.9,
                'sold_item' => 50,
            ],

            [
                'id' => 3,
                'name' => 'Pop Corn',
                'image' => 'assets/images/Snack/popcorn.png',
                'price' => 10000,
                'description' => 'Pop Corn is a snack',
                'category_id' => 1,
                'discount' => 0,
                'stock' => 70,
                'rating' => 4.5,
                'sold_item' => 40,

            ],
            [
                'id' => 4,
                'name' => 'Shampoo',
                'image' => 'assets/images/BeautyHealth/shampoo.jpg',
                'price' => 10000,
                'description' => 'Shampoo is a brand for cleaning hair',
                'category_id' => 3,
                'discount' => 0,
                'stock' => 100,
                'rating' => 4.9,
                'sold_item' => 50,
            ],
            [
                'id' => 5,
                'name' => 'Doritos',
                'image' => 'assets/images/Snack/doritos.jpg',
                'price' => 7000,
                'description' => 'Doritos is a snack',
                'category_id' => 1,
                'discount' => 0,
                'stock' => 40,
                'rating' => 4.9,
                'sold_item' => 20,
            ],
            [
                'id' => 6,
                'name' => 'Indomie',
                'image' => 'assets/images/FoodBeverage/indomie.jpg',
                'price' => 3000,
                'description' => 'Indomie is a brand of instant noodle',
                'category_id' => 2,
                'discount' => 0,
                'stock' => 100,
                'rating' => 4.9,
                'sold_item' => 50,
            ],
            [
                'id' => 7,
                'name' => 'Mie Sedaap',
                'image' => 'assets/images/FoodBeverage/miesedap.jpg',
                'price' => 4000,
                'description' => 'Mie Sedaap is a brand of instant noodle',
                'category_id' => 2,
                'discount' => 0,
                'stock' => 200,
                'rating' => 4.8,
                'sold_item' => 100,
            ],
            [
                'id' => 8,
                'name' => 'Chocolate Bar',
                'image' => 'assets/images/Snack/chocolatebar.jpg',
                'price' => 12000,
                'description' => 'Chocolate Bar is a snack',
                'category_id' => 1,
                'discount' => 0,
                'stock' => 60,
                'rating' => 4.8,
                'sold_item' => 7,
            ],
            [
                'id' => 9,
                'name' => 'Teh Botol',
                'image' => 'assets/images/FoodBeverage/tehbotol.jpg',
                'price' => 6000,
                'description' => 'Teh Botol is a brand of tea',
                'category_id' => 2,
                'discount' => 0,
                'stock' => 100,
                'rating' => 4.9,
                'sold_item' => 50,
            ],
            [
                'id' => 10,
                'name' => 'Baby Wipes',
                'image' => 'assets/images/BabyKid/babywipes.jpg',
                'price' => 6000,
                'description' => 'Baby Wipes is a brand for cleaning baby',
                'category_id' => 5,
                'discount' => 0,
                'stock' => 100,
                'rating' => 4.9,
                'sold_item' => 50,
            ],
            [
                'id' => 11,
                'name' => 'Toilet Cleaner',
                'image' => 'assets/images/HomeCare/toiletcleaner.jpg',
                'price' => 10000,
                'description' => 'Toilet Cleaner is a brand for cleaning toilet',
                'category_id' => 4,
                'discount' => 0,
                'stock' => 100,
                'rating' => 4.9,
                'sold_item' => 50,
            ],
            [
                'id' => 12,
                'name' => 'Lifebuoy',
                'image' => 'assets/images/BeautyHealth/lifebuoy.jpg',
                'price' => 6000,
                'description' => 'Lifeboy is a brand of soap',
                'category_id' => 3,
                'discount' => 0,
                'stock' => 100,
                'rating' => 4.9,
                'sold_item' => 50,
            ],
            [
                'id' => 13,
                'name' => 'Sari Roti',
                'image' => 'assets/images/FoodBeverage/sariroti.jpg',
                'price' => 10000,
                'description' => 'Sari Roti is a brand of bread',
                'category_id' => 2,
                'discount' => 0,
                'stock' => 150,
                'rating' => 4.7,
                'sold_item' => 70,
            ],
            [
                'id' => 14,
                'name' => 'Baby Oil',
                'image' => 'assets/images/BabyKid/babyoil.jpg',
                'price' => 8000,
                'description' => 'Baby Oil is a brand for baby massage',
                'category_id' => 5,
                'discount' => 0,
                'stock' => 100,
                'rating' => 4.9,
                'sold_item' => 50,
            ],
            [
                'id' => 15,
                'name' => 'Sun Screen',
                'image' => 'assets/images/BeautyHealth/sunscreen.jpeg',
                'price' => 8000,
                'description' => 'Sun Screen is a brand for protecting skin from sun',
                'category_id' => 3,
                'discount' => 0,
                'stock' => 100,
                'rating' => 4.9,
                'sold_item' => 50,
            ],
            [
                'id' => 16,
                'name' => 'Detergent So Klin',
                'image' => 'assets/images/HomeCare/detergent.jpg',
                'price' => 6000,
                'description' => 'Detergent So Klin is a brand for cleaning clothes',
                'category_id' => 4,
                'discount' => 0,
                'stock' => 100,
                'rating' => 4.9,
                'sold_item' => 50,
            ],
            [
                'id' => 17,
                'name' => 'Baby Formula',
                'image' => 'assets/images/BabyKid/babyformula.jpg',
                'price' => 257000,
                'description' => 'Baby Formula is a brand for baby milk',
                'category_id' => 5,
                'discount' => 0,
                'stock' => 100,
                'rating' => 4.9,
                'sold_item' => 50,

            ],
            [
                'id' => 18,
                'name' => 'Pepsodent',
                'image' => 'assets/images/BeautyHealth/pepsodent.jpg',
                'price' => 8000,
                'description' => 'Pepsodent is a brand of toothpaste',
                'category_id' => 3,
                'discount' => 0,
                'stock' => 100,
                'rating' => 4.9,
                'sold_item' => 50,
            ],
            [
                'id' => 20,
                'name' => 'Glass Cleaner',
                'image' => 'assets/images/HomeCare/glasscleaner.jpg',
                'price' => 8000,
                'description' => 'Glass Cleaner is a brand for cleaning glass',
                'category_id' => 4,
                'discount' => 20,
                'stock' => 100,
                'rating' => 4.9,
                'sold_item' => 50,
            ],
            [
                'id' => 21,
                'name' => 'Kopi Kenangan',
                'image' => 'assets/images/FoodBeverage/kopikenangan.jpg',
                'price' => 7000,
                'description' => 'Kopi Kenangan is a brand of coffee',
                'category_id' => 2,
                'discount' => 10,
                'stock' => 100,
                'rating' => 4.9,
                'sold_item' => 50,
            ],
            [
                'id' => 22,
                'name' => 'Facial Wash',
                'image' => 'assets/images/BeautyHealth/facialwash.jpg',
                'price' => 7000,
                'description' => 'Facial Wash is a brand for cleaning face',
                'category_id' => 3,
                'discount' => 0,
                'stock' => 100,
                'rating' => 4.9,
                'sold_item' => 50,
            ],
            [
                'id' => 23,
                'name' => 'Floor Cleaner',
                'image' => 'assets/images/HomeCare/floorcleaner.jpg',
                'price' => 8000,
                'description' => 'Floor Cleaner is a brand for cleaning floor',
                'category_id' => 4,
                'discount' => 0,
                'stock' => 100,
                'rating' => 4.9,
                'sold_item' => 50,
            ],
            [
                'id' => 25,
                'name' => 'Pocari Sweat',
                'image' => 'assets/images/Snack/pocari.jpg',
                'price' => 6000,
                'description' => 'Pocari Sweat is a health drink',
                'category_id' => 1,
                'discount' => 0,
                'stock' => 50,
                'rating' => 4.7,
                'sold_item' => 30,
            ],
        ];
    }

    public function index()
    {
        return view('pages.product.index')
        ->with('categories', $this->category)
        ->with('products', $this->product);
    }

    public function show($id)
    {
        $product = $this->product[0];
        return view('pages.product.show')->with('product', $product);
    }

    public function filterByCategory($id)
    {
        $categoryId = null;
        foreach ($this->category as $category) {
            if ($category['name_url'] === $id) {
                $categoryId = $category['id'];
                break;
            }
        }
        $filteredProducts = [];
        foreach ($this->product as $product) {
          if ($product['category_id'] === $categoryId) {
            $filteredProducts[] = $product;
          }
        }
        return view('pages.product.index')->with('categories', $this->category)->with('products', $filteredProducts);
    }
    public function filterByCategoryFood()
    {
        $products = $this->filterProductsByCategory($this->product, 2);
        return view('pages.product.index')->with('categories', $this->category)->with('products', $products);
    }
    public function filterByCategoryBeauty()
    {
        $products = $this->filterProductsByCategory($this->product, 3);
        return view('pages.product.index')->with('categories', $this->category)->with('products', $products);
    }
    public function filterByCategoryHomeCare()
    {
        $products = $this->filterProductsByCategory($this->product, 4);
        return view('pages.product.index')->with('categories', $this->category)->with('products', $products);
    }
    public function filterByCategoryBabyKid()
    {
        $products = $this->filterProductsByCategory($this->product, 5);
        return view('pages.product.index')->with('categories', $this->category)->with('products', $products);
    }

    function filterProductsByCategory($products, $categoryId) {
        $filteredProducts = [];
        foreach ($products as $product) {
          if ($product['category_id'] === $categoryId) {
            $filteredProducts[] = $product;
          }
        }
        return $filteredProducts;
      }

}
