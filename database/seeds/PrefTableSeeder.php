<?php

use Illuminate\Database\Seeder;
use Goodby\CSV\Import\Standard\Lexer;
use Goodby\CSV\Import\Standard\Interpreter;
use Goodby\CSV\Import\Standard\LexerConfig;


class PrefTableSeeder extends Seeder
{

    const CSV_FILENAME = '/../database/seeds/pref_utf8.csv'; 

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('[Start] import data.');

        $config = new LexerConfig();
        
        $config->setDelimiter(",");
        
        $config->setIgnoreHeaderLine(true);
        $lexer = new Lexer($config);
        $interpreter = new Interpreter();
        $interpreter->addObserver(function(array $row) {
            
            $pref = \App\Pref::create([
                    'code' => $row[0], 
                    'prefectures' => $row[1], 
               ]);
        });

        $lexer->parse(app_path() . self::CSV_FILENAME, $interpreter);

        $this->command->info('[End] import data.');
    }
}
