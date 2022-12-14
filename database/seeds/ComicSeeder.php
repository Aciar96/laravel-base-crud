<?php
use App\Model\Comic;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');

        foreach ($comics as $comic){
            $now_comic = new Comic();
            $new_comic->fill($comic);
            $new_comic->save();
        }
    }
}
