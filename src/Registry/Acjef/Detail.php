<?php
/**
 * Classe para validação de Arquivo Fonte de Dados (AFD).
 *
 * Especificação do MTE referente a portaria 1.510/2009, especifica um padrão
 * para os arquivos gerados pelos REP - Registrador Eletrônico de Ponto
 *
 * @author  Victor Ventura <euventura@gmail.com>
 *
 * @version  0.1
 *
 * @copyright  CC BY-SA 3.0 <http://creativecommons.org/licenses/by-sa/3.0/>
 */

namespace Convenia\AfdReader\Registry\Acjef;

use Convenia\AfdReader\Interfaces\RegistryInterface;

class Detail implements RegistryInterface
{
    public $map = [
        1  => [
            'size' => 9,
            'type' => 'numeric',
            'name' => 'sequency',
        ],
        2  => [
            'size' => 1,
            'type' => 'numeric',
            'name' => 'type',
        ],
        3  => [
            'size'  => 12,
            'type'  => 'numeric',
            'name'  => 'identityNumber',
        ],
        4  => [
            'size'  => 8,
            'type'  => 'numeric',
            'name'  => 'startDate',
            'class' => \Convenia\AfdReader\Field\Date::class,
        ],
        5  => [
            'size' => 4,
            'type' => 'numeric',
            'name' => 'firstHour',
            'class' => \Convenia\AfdReader\Field\Time::class,
        ],
        6  => [
            'size' => 4,
            'type' => 'numeric',
            'name' => 'hourCode',
        ],
        7  => [
            'size'  => 4,
            'type'  => 'alphanumeric',
            'name'  => 'dayTime',
            'class' => \Convenia\AfdReader\Field\Time::class,
        ],
        8  => [
            'size' => 4,
            'type' => 'numeric',
            'name' => 'nightTime',
            'class' => \Convenia\AfdReader\Field\Time::class,
        ],
        9  => [
            'size'  => 4,
            'type'  => 'alphanumeric',
            'name'  => 'overtime',
            'class' => \Convenia\AfdReader\Field\Time::class,
        ],
        10 => [
            'size' => 4,
            'type' => 'numeric',
            'name' => 'overtimePercentage',
        ],
    ];

    /**
     * Return may about line type.
     *
     * @method map
     *
     * @return array Map
     */
    public function map()
    {
        return $this->map;
    }
}
