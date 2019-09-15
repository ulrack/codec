<?php
/**
 * Copyright (C) Jyxon, Inc. All rights reserved.
 * See LICENSE for license details.
 */
namespace Ulrack\Codec\Common;

interface DecoderInterface
{
    /**
     * Decodes data from a format.
     *
     * @param mixed $input The input that should be decoded.
     *
     * @return mixed The decoded data.
     */
    public function decode($input);
}
