<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ShareCertificate extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'share_certificates';
    protected $primaryKey = 'id';
    protected $fillable = [
        'share_no',
        'member_reg_no',
        'member_name',
        'address',
        'gender',
        'nos_of_shares',
        'unit_no',
        'share_from',
        'share_to',
        'date',
        'dt_gb_or_mc_meeting_transfer_aaproved',
        'sr_no_sh_reg_held_by_transferor',
        'sr_no_sh_reg_held_by_transferee',
        'chairman',
        'secretary',
        'committee_member',
        'member_type',
        'status'
    ];
}
