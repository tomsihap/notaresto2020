<?php

namespace App\DataFixtures;

use App\Entity\Review;
use App\Repository\RestaurantRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class ReviewFixtures extends Fixture implements DependentFixtureInterface
{

    private $restaurantRepository;

    public function __construct(RestaurantRepository $restaurantRepository) {
        $this->restaurantRepository = $restaurantRepository;
    }

    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');

        for ($i = 0; $i < 2000; $i++) {

            $restaurant = $this->restaurantRepository->find( rand(1, 100) );

            $review = new Review;
            $review->setName($faker->sentence);
            $review->setContent($faker->realText(500));
            $review->setRating( rand(1, 5) );
            $review->setRestaurant($restaurant);
            $manager->persist($review);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            RestaurantFixtures::class
        ];
    }
}
