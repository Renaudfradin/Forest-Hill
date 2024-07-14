<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Business;
use App\Models\Category;
use App\Models\Contremarque;
use App\Models\Course;
use App\Models\Events;
use App\Models\Subscription;
use App\Models\User;
use App\Models\UserBanking;
use Closure;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Seeder;
use Symfony\Component\Console\Helper\ProgressBar;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->withProgressBar(1, fn () => User::factory(1)
            ->has(Article::factory()->count(10))
            ->has(Contremarque::factory()->count(8)->state(
                ['user_id' => User::factory(), 'subscription_id' => Subscription::factory(),'business_id' => Business::factory(),]
            ), 'contremarque')
            ->create([
                'name' => 'test',
                'email' => 'test@gmail.com',
            ])
        );
        $this->command->info('Admin test user created.');

        User::factory(10)->create();
        $this->command->info('User created.');

        Events::factory(10)->create();
        $this->command->info('Events created.');
    }

    protected function withProgressBar(int $amount, Closure $createCollectionOfOne): Collection
    {
        $progressBar = new ProgressBar($this->command->getOutput(), $amount);

        $progressBar->start();

        $items = new Collection();

        foreach (range(1, $amount) as $i) {
            $items = $items->merge(
                $createCollectionOfOne()
            );
            $progressBar->advance();
        }

        $progressBar->finish();

        $this->command->getOutput()->writeln('');

        return $items;
    }
}
