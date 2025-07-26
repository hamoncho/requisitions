<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requisition extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'processes_id',
        'users_id',
        'indicators_id',
        'status',
        'current_approver_id',
        'folio',
    ];

    /**
     * The "booted" method of the model.
     *
     * Se ejecuta automáticamente cuando el modelo es inicializado.
     */
    protected static function booted(): void
    {
        // Se dispara justo antes de que un nuevo registro sea creado.
        static::creating(function (Requisition $requisition) {
            // Verificamos si el folio ya fue asignado para no sobrescribirlo.
            if (is_null($requisition->folio)) {
                // Buscamos el valor máximo actual del folio en la tabla,
                // le sumamos 1 y lo asignamos al nuevo registro.
                // Usamos '?? 0' para manejar el caso en que la tabla esté vacía.
                $requisition->folio = (self::max('folio') ?? 0) + 1;
            }
        });
    }

    /**
     * Get all of the items for the Requisition.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function requisitionItems()
    {
        return $this->hasMany(RequisitionItem::class, 'requisitions_id');
    }

    /**
     * Get the indicator that owns the requisition.
     */
    public function indicator()
    {
        return $this->belongsTo(Indicator::class, 'indicators_id');
    }

    /**
     * Get the process that owns the requisition.
     */
    public function process()
    {
        return $this->belongsTo(Process::class, 'processes_id');
    }

    /**
     * Get the user that owns the requisition.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    /**
     * Get all of the approvals for the Requisition.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function approvals()
    {
        return $this->hasMany(RequisitionApproval::class);
    }

    /**
     * Get the current approver of the requisition.
     */
    public function currentApprover()
    {
        return $this->belongsTo(User::class, 'current_approver_id');
    }
}
