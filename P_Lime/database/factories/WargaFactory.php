<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Warga>
 */
class WargaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nik' => fake()->unique()->nik(),
            'no_kk' => fake()->nik(),
            'nama_lengkap' => fake()->name(),
            'tempat_lahir' => fake()->city(),
            'tanggal_lahir' => fake()->dateTimeBetween('-80 years', '-15 years'),
            'jenis_kelamin' => ['Laki-laki', 'Perempuan'][fake()->randomElement(array(0, 1))],
            'alamat' => fake()->address(),
            'agama' => fake()->randomElement(['Islam', 'Kristen', 'Katolik','Hindu', 'Buddha', 'Konghucu']),
            'nomor_telepon' => fake()->phoneNumber(),
            'status' => fake()->randomElement(['Belum Kawin', 'Kawin', 'Cerai Hidup', 'Cerai Mati']),

            'pekerjaan'=> fake()->randomElement(['Karyawan Swasta',
            'Pegawai Negeri Sipil',
            'Wiraswasta',
            'Petani',
            'Pedagang',
            'Guru',
            'Dokter',
            'Perawat',
            'Supir',
            'Buruh',]),

            'kewarganegaraan' => 'Indonesia',
            'domisili'  => fake()->address()
        ];
    }
}
