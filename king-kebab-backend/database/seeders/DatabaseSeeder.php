<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;
use App\Models\MenuCategory;
use App\Models\Menu;
use App\Models\Article;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Settings
        Setting::set('site_name', 'King Kebab');
        Setting::set('site_description', 'Le vrai goût du kebab');
        Setting::set('contact_address', '20, avenue Marcel Nicolas');
        Setting::set('contact_phone', '0426423743');
        Setting::set('contact_email', 'contact@kingkebab.com');
        Setting::set('opening_hours', '11h00 - 23h00');
        Setting::set('facebook_url', '#');
        Setting::set('instagram_url', '#');
        Setting::set('twitter_url', '#');

        // Menu Categories
        MenuCategory::create(['name' => 'Kebabs', 'description' => 'Nos délicieux kebabs traditionnels']);
        MenuCategory::create(['name' => 'Pizzas', 'description' => 'Pizzas fraîches et savoureuses']);
        MenuCategory::create(['name' => 'Burgers', 'description' => 'Burgers gourmets']);
        MenuCategory::create(['name' => 'Grillades', 'description' => 'Viandes grillées à la perfection']);
        MenuCategory::create(['name' => 'Boissons', 'description' => 'Boissons fraîches et chaudes']);

        // Menu Items
        Menu::create([
            'name' => 'Kebab Royal',
            'description' => 'Kebab traditionnel avec viande de bœuf, salade, tomates, oignons et sauce spéciale',
            'price' => 10.00,
            'category' => 'Kebabs',
            'image' => 'menu-1.png',
            'is_available' => true
        ]);

        Menu::create([
            'name' => 'Kebab Poulet',
            'description' => 'Kebab au poulet grillé avec légumes frais et sauce blanche',
            'price' => 9.50,
            'category' => 'Kebabs',
            'image' => 'menu-2.png',
            'is_available' => true
        ]);

        Menu::create([
            'name' => 'Kebab Végétarien',
            'description' => 'Kebab végétarien avec falafels, légumes frais et sauce tahini',
            'price' => 8.50,
            'category' => 'Kebabs',
            'image' => 'menu-3.png',
            'is_available' => true
        ]);

        Menu::create([
            'name' => 'Pizza Margherita',
            'description' => 'Pizza classique avec tomates, mozzarella et basilic frais',
            'price' => 12.00,
            'category' => 'Pizzas',
            'image' => 'menu-4.png',
            'is_available' => true
        ]);

        Menu::create([
            'name' => 'Pizza Quatre Fromages',
            'description' => 'Pizza gourmet avec quatre variétés de fromages',
            'price' => 14.00,
            'category' => 'Pizzas',
            'image' => 'menu-5.png',
            'is_available' => true
        ]);

        Menu::create([
            'name' => 'Burger Classic',
            'description' => 'Burger avec steak de bœuf, salade, tomate, oignon et fromage',
            'price' => 11.00,
            'category' => 'Burgers',
            'image' => 'menu-6.png',
            'is_available' => true
        ]);

        Menu::create([
            'name' => 'Burger Royal',
            'description' => 'Burger premium avec double steak, bacon, fromage et sauce spéciale',
            'price' => 13.50,
            'category' => 'Burgers',
            'image' => 'menu-1.png',
            'is_available' => true
        ]);

        Menu::create([
            'name' => 'Assiette Grillades',
            'description' => 'Assiette de viandes grillées avec frites et salade',
            'price' => 15.00,
            'category' => 'Grillades',
            'image' => 'menu-2.png',
            'is_available' => true
        ]);

        Menu::create([
            'name' => 'Poulet Grillée',
            'description' => 'Poulet grillé avec riz et légumes',
            'price' => 12.50,
            'category' => 'Grillades',
            'image' => 'menu-3.png',
            'is_available' => true
        ]);

        Menu::create([
            'name' => 'Coca-Cola',
            'description' => 'Boisson gazeuse rafraîchissante',
            'price' => 2.50,
            'category' => 'Boissons',
            'image' => 'menu-4.png',
            'is_available' => true
        ]);

        Menu::create([
            'name' => 'Jus d\'Orange',
            'description' => 'Jus d\'orange frais naturel',
            'price' => 3.00,
            'category' => 'Boissons',
            'image' => 'menu-5.png',
            'is_available' => true
        ]);

        Menu::create([
            'name' => 'Thé à la Menthe',
            'description' => 'Thé traditionnel à la menthe fraîche',
            'price' => 2.00,
            'category' => 'Boissons',
            'image' => 'menu-6.png',
            'is_available' => true
        ]);

        Menu::create([
            'name' => 'Café Turc',
            'description' => 'Café turc traditionnel préparé à la perfection',
            'price' => 2.50,
            'category' => 'Boissons',
            'image' => 'menu-1.png',
            'is_available' => true
        ]);

        Menu::create([
            'name' => 'Limonade',
            'description' => 'Limonade maison rafraîchissante',
            'price' => 3.50,
            'category' => 'Boissons',
            'image' => 'menu-2.png',
            'is_available' => true
        ]);

        // Articles
        Article::create([
            'title' => 'L\'histoire du Kebab Royal',
            'content' => "Le Kebab Royal est notre plat signature depuis plus de 20 ans. Cette recette traditionnelle a été transmise de génération en génération dans notre famille.

Notre secret réside dans la sélection rigoureuse des ingrédients. Nous utilisons uniquement de la viande de bœuf de première qualité, marinée pendant 24 heures dans un mélange d'épices secrètes qui lui donne ce goût unique et authentique.

La préparation commence tôt le matin, où notre chef prépare la pâte fraîche pour le pain. Chaque kebab est assemblé à la main avec amour, en respectant les proportions parfaites entre la viande, les légumes frais et nos sauces maison.

Les légumes sont sélectionnés quotidiennement auprès de nos fournisseurs locaux pour garantir leur fraîcheur. La salade, les tomates, les oignons et les concombres sont coupés à la main pour préserver leur texture et leur saveur.

Notre sauce spéciale, préparée selon une recette familiale secrète, est le complément parfait qui lie tous les ingrédients ensemble. Elle apporte cette touche finale qui fait de notre Kebab Royal une expérience culinaire inoubliable.

Chaque bouchée raconte une histoire - l'histoire de notre passion pour la gastronomie traditionnelle et notre engagement à offrir à nos clients le meilleur de la cuisine du Moyen-Orient.",
            'author' => 'Chef Ahmed',
            'status' => 'published',
            'published_at' => now()->subDays(5)
        ]);

        Article::create([
            'title' => 'Les secrets de notre pâte fraîche',
            'content' => "La qualité de notre pain est essentielle pour créer le kebab parfait. Chaque jour, notre boulanger commence son travail à l'aube pour préparer la pâte fraîche qui accompagnera nos kebabs.

Notre recette de pâte utilise une farine de blé dur de haute qualité, mélangée avec de l'eau tiède, du sel et une pincée de sucre. La pâte est pétrie à la main pendant au moins 15 minutes pour développer le gluten et créer cette texture élastique caractéristique.

Après le pétrissage, la pâte repose pendant 2 heures dans un endroit chaud et humide. Cette étape cruciale permet à la pâte de lever et de développer ses saveurs. Nous surveillons attentivement la température et l'humidité pour obtenir la consistance parfaite.

Une fois levée, la pâte est divisée en portions individuelles et façonnée en boules. Chaque boule est ensuite étirée à la main pour former le pain fin et souple qui enveloppera nos kebabs.

La cuisson se fait sur une plaque chaude traditionnelle, donnant au pain cette texture légèrement croustillante à l'extérieur et moelleuse à l'intérieur. Le temps de cuisson est minutieusement contrôlé pour obtenir la couleur dorée parfaite.

Ce processus artisanal, transmis de génération en génération, est ce qui distingue notre pain de celui des autres restaurants. Chaque bouchée de notre kebab commence par cette base parfaite, créant une expérience culinaire authentique et mémorable.",
            'author' => 'Boulanger Hassan',
            'status' => 'published',
            'published_at' => now()->subDays(3)
        ]);

        Article::create([
            'title' => 'L\'importance des épices dans notre cuisine',
            'content' => "Les épices sont le cœur de notre cuisine traditionnelle. Chaque épice que nous utilisons a été soigneusement sélectionnée pour sa qualité et son authenticité.

Notre mélange d'épices secret comprend du cumin, de la coriandre, du paprika, du curcuma et plusieurs autres épices qui créent cette saveur unique caractéristique de notre cuisine. Ces épices sont importées directement des meilleures régions productrices du Moyen-Orient.

Le processus de torréfaction des épices est crucial. Nous torréfions nos épices à basse température pour préserver leurs huiles essentielles et leurs arômes. Cette méthode traditionnelle, transmise de génération en génération, garantit que chaque épice libère son potentiel gustatif maximum.

La marinade de notre viande utilise un mélange d'épices spécifiquement dosé pour chaque type de viande. Le bœuf nécessite un mélange différent de celui du poulet, et nous respectons ces nuances pour obtenir le goût parfait.

Nous préparons également nos propres mélanges d'épices pour nos sauces. La sauce blanche, par exemple, contient un mélange secret d'épices qui lui donne cette saveur distinctive et addictive.

L'utilisation des épices dans notre cuisine ne se limite pas aux kebabs. Nos pizzas et nos grillades bénéficient également de ces mélanges d'épices soigneusement élaborés, créant une cohérence gustative dans tout notre menu.

Chaque jour, notre chef vérifie la qualité de nos épices et ajuste les proportions selon les saisons et la disponibilité des ingrédients. Cette attention aux détails est ce qui fait de notre cuisine une expérience authentique et mémorable.",
            'author' => 'Chef Fatima',
            'status' => 'published',
            'published_at' => now()->subDays(1)
        ]);

        Article::create([
            'title' => 'Notre engagement pour la qualité',
            'content' => "Chez King Kebab, la qualité n'est pas seulement un objectif, c'est notre raison d'être. Depuis notre ouverture, nous nous engageons à offrir à nos clients les meilleurs ingrédients et les techniques culinaires les plus authentiques.

Notre engagement pour la qualité commence par la sélection rigoureuse de nos fournisseurs. Nous travaillons exclusivement avec des fournisseurs locaux et certifiés qui partagent nos valeurs de qualité et de durabilité.

La viande que nous utilisons provient d'éleveurs locaux qui respectent les plus hauts standards de bien-être animal. Nous privilégions la viande bio et les pratiques d'élevage respectueuses de l'environnement.

Nos légumes sont sélectionnés quotidiennement auprès de maraîchers locaux. Nous privilégions les produits de saison et les variétés traditionnelles qui offrent le meilleur goût et la meilleure qualité nutritionnelle.

L'hygiène et la sécurité alimentaire sont au cœur de nos préoccupations. Notre équipe suit des formations régulières sur les bonnes pratiques d'hygiène, et notre cuisine respecte les plus hauts standards de sécurité alimentaire.

Nous investissons également dans des équipements de qualité professionnelle qui nous permettent de maintenir la fraîcheur et la qualité de nos ingrédients tout au long de la journée.

Notre engagement pour la qualité se reflète également dans notre service client. Chaque membre de notre équipe est formé pour offrir un service attentionné et personnalisé, créant une expérience culinaire complète et mémorable.

Nous croyons que la qualité n'est pas un coût, mais un investissement dans la satisfaction de nos clients et la pérennité de notre entreprise. C'est pourquoi nous continuons à investir dans les meilleurs ingrédients, les meilleures techniques et le meilleur service.",
            'author' => 'Directeur Mohammed',
            'status' => 'published',
            'published_at' => now()
        ]);
    }
}
