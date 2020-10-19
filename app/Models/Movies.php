<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    /**
     * <b>SoftDeletes</b> Recurso utilizado para fazer deleção de registro lógico "sem excluir"
     * Usado no campo deleted_at da tabela 
     */
    // use SoftDeletes;

    /**
     * <b>table</b> Informa qual é a tabela que o modelo irá utilizar
    */
    protected $table = 'movies';

    /**
     * <b>primaryKey</b> Informa qual a é a chave primaria da tabela
     */
    protected $primaryKey = "id";

    /**
     * <b>fillable</b> Informa quais colunas é permitido a inserção de dados (MassAssignment)
     *  
     */
    protected $fillable = [
        'id',
        'adult',
        'backdrop_path',
        'id_genres',
        'homepage',
        'original_language',
        'original_title',
        'overview',
        'popularity',
        'poster_path',
        'release_date',
        'runtime',
        'spoken_languages',
        'status',
        'tagline',
        'title',
        'video',
        'vote_average',
        'vote_count',
    ];

    /**
     * <b>rules</b> Atributo responsável em definir regras de validação dos dados submetidos pelo formulário
     * OBS: A validação bail é responsável em parar a validação caso um das que tenha sido especificada falhe
     */
    public $rules = [
        'adult'             => 'bail|required|boolean',
        'backdrop_path'     => 'bail',
        'id_genres'         => 'bail|required',
        'homepage'          => 'bail',
        'original_language' => 'bail|required',
        'original_title'    => 'bail|required',
        'overview'          => 'bail',
        'popularity'        => 'bail|required|integer',
        'poster_path'       => 'bail|',
        'release_date'      => 'bail|required',
        'runtime'           => 'bail|date',
        'spoken_languages'  => 'bail|required',
        'status'            => 'bail|required',
        'tagline'           => 'bail|',
        'title'             => 'bail|required',
        'video'             => 'bail|required|boolean',
        'vote_average'      => 'bail|required|integer',
        'vote_count'        => 'bail|required|integer' 
    ];

    /**
     * <b>messages</b>  Atributo responsável em definir mensagem de validação de acordo com as regras especificadas no atributo $rules
     */
    public $messages = [
       
    ];

    /**
     * <b>hidden</b> Atributo responsável em esconder colunas que não deverão ser retornadas em uma requisição
     */
    protected $hidden  = [

    ];

    /**
     * <b>collection</b> Atributo responsável em informar o namespace e o arquivo do resource
     * O mesmo é utilizado em forma de facade.
     * OBS: Responsável em retornar uma coleção com os alias(apelido) atribuidos para cada coluna. 
     */
    public $collection = "\App\Http\Resources\Movies::collection";

    /**
     * <b>resource</b>
     */
    public $resource = "\App\Http\Resources\Movies";

    /**
     * <b>map</b> Atributo responsável em atribuir um alias(Apelido), para a colunas do banco de dados
     * OBS: este atributo é utilizado no Metodo store e update da ApiControllerTrait
     */
    public $map = [
        'adult'             => 'adult' ,
        'backdrop_path'     => 'backdrop_path',
        'id_genres'         => 'id_genres',
        'homepage'          => 'homepage',
        'original_language' => 'original_language',
        'original_title'    => 'original_title',
        'overview'          => 'overview',
        'popularity'        => 'popularity',
        'poster_path'       => 'poster_path',
        'release_date'      => 'release_date',
        'runtime'           => 'runtime',
        'spoken_languages'  => 'spoken_languages',
        'status'            => 'status',
        'tagline'           => 'tagline',
        'title'             => 'title',
        'video'             => 'video',
        'vote_average'      => 'vote_average',
        'vote_count'        => 'vote_count',
    ];

    /**
     * <b>getPrimaryKey</b> Método responsável em retornar o nome da primaryKey.
     * OBS: Não é recomendado que este atributo seja publico, por isso foi realizado o encapsulamento
     */
    public function getPrimaryKey()
    {
        return $this->primaryKey;
    }

    public function genres()
    {
        return $this->belongsTo(Genres::class, 'id_genres', 'id');
    }
}
