<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("states")->insert([
            [
                "name"       => "Rondônia",
                "sigla"      => "RO",
            ], [
                "name"       => "Acre",
                "sigla"      => "AC",
            ], [
                "name"       => "Amazonas",
                "sigla"      => "AM",
            ], [
                "name"       => "Roraima",
                "sigla"      => "RR",
            ], [
                "name"       => "Pará",
                "sigla"      => "PA",
            ], [
                "name"       => "Amapá",
                "sigla"      => "AP",
            ], [
                "name"       => "Tocantins",
                "sigla"      => "TO",
            ], [
                "name"       => "Maranhão",
                "sigla"      => "MA",
            ], [
                "name"       => "Piauí",
                "sigla"      => "PI",
            ], [
                "name"       => "Ceará",
                "sigla"      => "CE",
            ], [
                "name"       => "Rio Grande do Norte",
                "sigla"      => "RN",
            ], [
                "name"       => "Paraíba",
                "sigla"      => "PB",
            ], [
                "name"       => "Pernambuco",
                "sigla"      => "PE",
            ], [
                "name"       => "Alagoas",
                "sigla"      => "AL",
            ], [
                "name"       => "Sergipe",
                "sigla"      => "SE",
            ], [
                "name"       => "Bahia",
                "sigla"      => "BA",
            ], [
                "name"       => "Minas Gerais",
                "sigla"      => "MG",
            ], [
                "name"       => "Espírito Santo",
                "sigla"      => "ES",
            ], [
                "name"       => "Rio de Janeiro",
                "sigla"      => "RJ",
            ], [
                "name"       => "São Paulo",
                "sigla"      => "SP",
            ], [
                "name"       => "Paraná",
                "sigla"      => "PR",
            ], [
                "name"       => "Santa Catarina",
                "sigla"      => "SC",
            ], [
                "name"       => "Rio Grande do Sul",
                "sigla"      => "RS",
            ], [
                "name"       => "Mato Grosso do Sul",
                "sigla"      => "MS",
            ], [
                "name"       => "Mato Grosso",
                "sigla"      => "MT",
            ], [
                "name"       => "Goiás",
                "sigla"      => "GO",
            ], [
                "name"       => "Distrito Federal",
                "sigla"      => "DF",
            ],
        ]);
    }
}
