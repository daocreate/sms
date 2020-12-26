<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'allowed' => 'L \': attribut doit être accepté. ',
    'active_url' => 'L \': attribut n \'est pas une URL valide.',
    'after' => 'L \' attribut: doit être une date après: date. ',
    'after_or_equal' => 'L \' attribut: doit être une date postérieure ou égale à: date. ',
    'alpha' => 'L \' attribut: ne peut contenir que des lettres. ',
    'alpha_dash' => 'L \' attribut: ne peut contenir que des lettres, des chiffres, des tirets et des traits de soulignement. ',
    'alpha_num' => 'L \' attribut: ne peut contenir que des lettres et des chiffres. ',
    'array' => 'L \': attribut doit être un tableau. ',
    'before' => 'L \' attribut: doit être une date antérieure à: date. ',
    'before_or_equal' => 'L \' attribut: doit être une date antérieure ou égale à: date. ',
    'between' => [
    'numeric' => 'L \' attribut: doit être compris entre: min et: max. ',
    'file' => 'L \' attribut: doit être compris entre: min et: max kilo-octets. ',
    'string' => 'L \' attribut: doit être compris entre: min et: max caractères. ',
    'array' => 'L \': attribut doit avoir entre: min et: max éléments. ',
],
    'boolean' => 'Le champ: attribute doit être vrai ou faux.',
    'confirm' => 'La: confirmation de l \'attribut ne correspond pas. ',
    'date' => 'L \' attribut: n \'est pas une date valide.',
    'date_format' => 'L \' attribut: ne correspond pas au format: format. ',
    'different' => 'Les attributs: et: other doivent être différents.',
    'digits' => 'L \': attribut doit être: chiffres chiffres. ',
    'digits_between' => 'L’attribut: doit être compris entre: min et: max chiffres.',
    'dimensions' => 'L \' attribut: a des dimensions d \'image invalides.',
    'distinct' => 'Le champ: attribute a une valeur en double.',
    'email' => 'L \': attribut doit être une adresse e-mail valide. ',
    'exists' => 'L \'attribut sélectionné: n \'est pas valide.',
    'file' => 'L \'attribut: doit être un fichier. ',
    'fill' => 'Le champ: attribute doit avoir une valeur.',
    'gt' => [
    'numeric' => 'L \':attribut doit être supérieur à: valeur. ',
    'file' => 'L \': attribut doit être supérieur à: valeur kilo-octets. ',
    'string' => 'L \': attribut doit être supérieur à: valeur caractères. ',
    'array' => 'L \': attribut doit avoir plus de: éléments de valeur. ',
],
    'gte' => [
    'numeric' => 'L \': attribut doit être supérieur ou égal à: valeur. ',
    'file' => 'L \': attribut doit être supérieur ou égal à: value kilo-octets. ',
    'string' => 'L \': attribut doit être supérieur ou égal à: valeur caractères. ',
    'array' => 'L \': attribut doit avoir: éléments de valeur ou plus. ',
],
    'image' => 'L \': attribut doit être une image. ',
    'in' => 'L \' attribut sélectionné: n \'est pas valide.',
    'in_array' => 'Le champ: attribute n\'existe pas dans: other.',
    'integer' => 'L \': attribut doit être un entier. ',
    'ip' => 'L \': attribut doit être une adresse IP valide. ',
    'ipv4' => 'L \': attribut doit être une adresse IPv4 valide. ',
    'ipv6' => 'L \': attribut doit être une adresse IPv6 valide. ',
    'json' => 'L \': attribut doit être une chaîne JSON valide. ',
    'lt' => [
    'numeric' => 'L \': attribut doit être inférieur à: valeur. ',
    'file' => 'L \': attribut doit être inférieur à: valeur kilo-octets. ',
    'string' => 'L \': attribut doit être inférieur à: caractères de valeur. ',
    'array' => 'L \': attribut doit avoir moins de: éléments de valeur. ',
],
    'lte' => [
    'numeric' => 'L \': attribut doit être inférieur ou égal à: valeur. ',
    'file' => 'L \': attribut doit être inférieur ou égal à: value kilo-octets. ',
    'string' => 'L \': attribut doit être inférieur ou égal à: valeur caractères. ',
    'array' => 'L \': attribut ne doit pas avoir plus de: éléments de valeur. ',
],
    'max' => [
    'numeric' => 'L \': attribut ne doit pas être supérieur à: max. ',
    'file' => 'L \': attribut ne peut pas être supérieur à: max kilo-octets. ',
    'string' => 'L \': attribut ne peut pas être supérieur à: max caractères. ',
    'array' => 'L \': attribut ne peut pas avoir plus de: max items. ',
],
    'mimes' => 'L \' attribut: doit être un fichier de type:: values. ',
    'mimetypes' => 'L \' attribut: doit être un fichier de type:: values. ',
    'min' => [
    'numeric' => 'L \': attribut doit être au moins: min. ',
    'file' => 'L \': attribut doit être au moins: min kilo-octets. ',
    'string' => 'L \': attribut doit contenir au moins: min caractères. ',
    'array' => 'L \': attribut doit avoir au moins: min items. ',
],
    'not_in' => 'L \' attribut sélectionné: n \'est pas valide.',
    'not_regex' => 'Le: format de l \' attribut n \'est pas valide.',
    'numeric' => 'L \': attribut doit être un nombre. ',
    'present' => 'Le champ: attribute doit être présent.',
    'regex' => 'Le: format de l \' attribut n \'est pas valide.',
    'required' => 'Le champ: attribute est obligatoire.',
    'required_if' => 'Le champ: attribute est obligatoire lorsque: other is: value.',
    'required_unless' => 'Le champ: attribute est obligatoire à moins que: other is in: values.',
    'required_with' => 'Le champ: attribute est requis lorsque: values ​​est présent.',
    'required_with_all' => 'Le champ: attribute est requis lorsque: values ​​est présent.',
    'required_without' => 'Le champ: attribute est requis lorsque: values ​​n \' est pas présent. ',
    'required_without_all' => 'Le champ: attribute est requis quand aucune des valeurs: n\'est présente.',
    'same' => 'Les attributs: et: other doivent correspondre.',
    'size' => [
        'numeric' => 'L \': attribut doit être: taille. ',
        'file' => 'L \': attribut doit être: taille kilo-octets. ',
        'string' => 'L \': attribut doit être: caractères de taille. ',
        'array' => 'L \': attribut doit contenir: éléments de taille. ',
    ],
    'string' => 'L \': attribut doit être une chaîne. ',
    'timezone' => 'L \' attribut: doit être une zone valide. ',
    'unique' => 'L \': attribut a déjà été pris. ',
    'upload' => 'L’attribut: n’a pas pu être téléchargé.',
    'url' => 'Le: format de l \' attribut n \'est pas valide.',

    /*
    | ------------------------------------------------- -------------------------
    | Lignes de langue de validation personnalisées
    | ------------------------------------------------- -------------------------
    |
    | Ici, vous pouvez spécifier des messages de validation personnalisés pour les attributs à l'aide du
    | convention "attribut.rule" pour nommer les lignes. Cela permet de
    | spécifiez une ligne de langue personnalisée spécifique pour une règle d'attribut donnée.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'message-personnalisé',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
