<?php

namespace App\Http\Controllers;

use App\Mail\optionsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class mailController extends Controller
{
    public function getEmail()
    {
        return view("mailForm");
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
            "nome" => "required|string|max:255",
            "email" => "required|string|email|max:255",
            "Birth-Place" => "required|string|max:255",
            "BirthDay" => "required|date",
            "Phone" => "required|numeric|max:999999999999",
            "Company" => "required|string|max:100",
            "Your-Message" => "required|string|max:255",
            "Privacy" => "accepted",
        ]);

        $username = $request->input("nome");
        $email = $request->input("email");
        $birthPlace = $request->input("Birth-Place");
        $birthDay = $request->input("BirthDay");
        $phone = $request->input("Phone");
        $company = $request->input("Company");
        $yourMessage = $request->input("Your-Message");

        $msg = "Ciao $username,\n\nQuesti sono i tuoi dati:\n\n"
            . "Nome: $username\n"
            . "Email: $email\n"
            . "Luogo di nascita: $birthPlace\n"
            . "Data di nascita: $birthDay\n"
            . "Telefono: $phone\n"
            . "Azienda: $company\n"
            . "Messaggio: $yourMessage\n";
        Mail::to($email)->send(new optionsMail($msg));

        return redirect("/")->with("success", "Dati inviati correttamente");
    }
}
