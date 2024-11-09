<?php

declare(strict_types=1);

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) 2021 CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace App\Modules\Categories\Models;

use CodeIgniter\Model;

class Categories extends Model
{
    protected $table          = 'at_categories';
    protected $useTimestamps  = true;
    protected $useSoftDeletes = true;
    protected $allowedFields  = [];
}