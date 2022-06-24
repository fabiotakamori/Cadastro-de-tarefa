<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//model da eloquent ORM, essa MODEL serie meio que é mapeado para uma tabela no DB
//se temos uma classe Serie ele irá buscar series
//porém se fosse seriado podemos utilizar protected $table = "seriados
class Tb_tarefas extends Model
{
    use HasFactory;
}
?>