<?php
/**
 * Copyright (C) Jyxon, Inc. All rights reserved.
 * See LICENSE for license details.
 */
namespace Ulrack\Codec\Common;

interface EncoderInterface
{
    /**
     * Encodes data into a format.
     *
     * @param mixed $input The input that should be encoded.
     *
     * @return mixed The encoded data.
     */
    public function encode($input);
}
