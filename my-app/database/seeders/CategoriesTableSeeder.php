<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $major_category_names = [
            'ノート', '過去問・ノート', 'レジュメ'
        ];
        $book_categories = [
            '政治経済学部', '法学部', '教育学部', '商学部',
            '社会科学部', '国際教養学部', '創造理工学部', '先進理工学部',
            '基幹理工学部', 'スポーツ科学部', '人間科学部'
        ];
        $note_categories = [
            '政治経済学部', '法学部', '教育学部', '商学部',
            '社会科学部', '国際教養学部', '創造理工学部', '先進理工学部',
            '基幹理工学部', 'スポーツ科学部', '人間科学部'
        ];
        $rejume_categories = [
            '政治経済学部', '法学部', '教育学部', '商学部',
            '社会科学部', '国際教養学部', '創造理工学部', '先進理工学部',
            '基幹理工学部', 'スポーツ科学部', '人間科学部'
        ];
        foreach ($major_category_names as $major_category_name) {
            if ($major_category_name == '過去問・ノート') {
                foreach ($book_categories as $book_category) {
                    Category::create([
                        'name' => $book_category,
                        'description' => $book_category,
                        'major_category_name' => $major_category_name
                    ]);
                }
            }
            if ($major_category_name == 'ノート') {
                foreach ($note_categories as $note_category) {
                    Category::create([
                        'name' => $note_category,
                        'description' => $note_category,
                        'major_category_name' => $major_category_name
                    ]);
                }
            }
            if ($major_category_name == 'レジュメ') {
                foreach ($rejume_categories as $rejume_category) {
                    Category::create([
                        'name' => $rejume_category,
                        'description' => $rejume_category,
                        'major_category_name' => $major_category_name
                    ]);
                }
            }
        }
     }
 }