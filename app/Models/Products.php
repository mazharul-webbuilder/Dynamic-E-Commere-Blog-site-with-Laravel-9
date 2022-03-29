<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    public static function getAllProduct()
    {
        return [
            0 => [
                'id'             => 1,
                'name'           => 'Summer T-shirt ',
                'price'          => '1050.Tk',
                'description'    => 'Smart Summer Fashinable T-shirt',
                'image'          => 't-shirt1.jpg'
            ],
            1 => [
                'id'             => 2,
                'name'           => 'New Jeans Pant',
                'price'          => '1250.Tk',
                'description'    => 'Smart Summer Fashinable new Jeans',
                'image'          => 'jeans-2.jpg'
            ],
            2 => [
                'id'             => 3,
                'name'           => 'Eid Lehenga',
                'price'          => '5000.Tk',
                'description'    => 'Smart Summer Fashinable Lehenga',
                'image'          => 'lehenga.jpg'
            ],
            3 => [
                'id'             => 4,
                'name'           => 'Smart Phone',
                'price'          => '350000.Tk',
                'description'    => 'Smart  Fashinable new Smart Phone',
                'image'          => 'smart-phone.jpg'
            ],
            4 => [
                'id'             => 5,
                'name'           => 'Fashionable 3-Pis',
                'price'          => '2500.Tk',
                'description'    => 'Smart Summer Fashinable 3-Pis',
                'image'          => '3-pis.jpg'
            ],
            5 => [
                'id'             => 6,
                'name'           => 'Premium Blanket',
                'price'          => '6000.Tk',
                'description'    => ' Summer Fashinable blanket',
                'image'          => 'blanket.jpg'
            ],
            6 => [
                'id'             => 7,
                'name'           => 'Fashionable Dairy',
                'price'          => '120.Tk',
                'description'    => 'Dairy for gift you favorite per',
                'image'          => 'dairy.jpg'
            ],
            7 => [
                'id'             => 8,
                'name'           => 'Fashionable Jeans',
                'price'          => '1400.Tk',
                'description'    => 'Smart Summer Fashinable Jeans',
                'image'          => 'jeans-1.jpg'
            ],
        ];
    }
}
