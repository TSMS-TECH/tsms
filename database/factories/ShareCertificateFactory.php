<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ShareCertificate>
 */
class ShareCertificateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $gen = ['M', 'F', 'T'], $status = ['0', '1'];
    public function definition(): array
    {
        return [
            'share_no' => fake()->buildingNumber(),
            'member_reg_no' => fake()->buildingNumber(),
            'member_name' => fake()->name(),
            'address' => fake()->address(),
            'gender' => $this->gen[array_rand($this->gen)],
            'nos_of_shares' => fake()->buildingNumber(),
            'unit_no' => fake()->buildingNumber(),
            'share_from' => fake()->buildingNumber(),
            'share_to' => fake()->buildingNumber(),
            'date' => fake()->dateTime()->format('Y-m-d'),
            'dt_gb_or_mc_meeting_transfer_aaproved' => fake()->firstName(),
            'sr_no_sh_reg_held_by_transferor' => fake()->name(),
            'sr_no_sh_reg_held_by_transferee' => fake()->name(),
            'chairman' => fake()->name(),
            'secretary' => fake()->name(),
            'committee_member' => fake()->name(),
            'member_type' => fake()->firstName(),
            'status' => $this->status[array_rand($this->status)]
        ];
    }
}
