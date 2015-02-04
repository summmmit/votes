<?php

class Options extends Eloquent {

    protected $fillable = array("options", "active");

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'options';

}
