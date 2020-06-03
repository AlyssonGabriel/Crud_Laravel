<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MinhasAnotacoes extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'MinhasAnotacoes';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'lista de anotações';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('MINHAS ANOTAÇÕES

model   //  localizada no diretório app,é utilizado para fazer a validação a partir de algo,autenticar usuários
controllers //  controla os fluxos da aplicação
middlware // controla todos as requisições e validação
routes  //  são responsaveis por lhe direcionar, para páginas,views..
obs:o metodo post só é possível com o get, e tem que ter a mesma rota,tipo o mesmo nome,exemplo:/Alysson.
dd()  //  serve para olhar por trás da interfce,o que se passa, o que acontece,é tipo o dir do windows ou ls do linux
all() //  listar algo
php artisan tinker  //  criar registros automatico
database/factories  //  é uma fabrica de usuarios, lá você pode criar mais de um usuarios, e tudo automatico
seeder  //  serve para criar registros
');
    }
}
