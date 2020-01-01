<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="utf-8">
        </head>
        <body>
		<!--
Para calcular a idade real dos cães utilize esses multiplicadores:
 
Para os dois primeiros anos de vida
Cachorros pequenos: multiplicar cada ano por 12,5
Cachorros médios: multiplicar cada ano por 10,5
Cachorros grandes: multiplicar cada ano por 9
 
A partir do terceiro ano de vida, acrescentar mais essa multiplicação:
Cachorros pequenos (multiplicar cada ano por): Lhasa Apso 4,49 / Shih Tzu 4,78 / Chihuahua 4,87 / Beagle 5,20 / Cocker Spaniel 5,55 / Pug 5,95 / Buldogue Francês 7,65
Cachorros médios (multiplicar cada ano por): Labrador Retriever 5,74 / Golden Retriever 5,74, Staffordshire Bull Terrier 5,33
Cachorros grandes (multiplicar cada ano por): Pastor Alemão 7,84 / Boxer 8,90
 
Fonte: Como calcular a idade real dos cachorros https://tudosobrecachorros.com.br/idade-canina-x-idade-humana/#ixzz69dW7m07X
Follow us: tudosobrecachorros on Facebook
-->
            <form action="calcula.php" method="POST">
				<fieldset>
					<legend align="center">PetAge</legend>
					Nome: 
					<input type="text" name="nome" placeholder="Digite o nome do seu pet"><br>
					Ele(a)é um(a): <input type="radio" name="tipo" value="Cão">Cão/Cadela
								   <input type="radio" name="tipo" value="Gato">Gato/Gata<br>
					Idade é: <input type="number" name="idade"><br>
					Pesa: 
					<select>
						<option name="peso" value="peso1">Até 9Kg
						<option name="peso" value="peso2">10Kg até 23Kg 
						<option name="peso" value="peso3">acima de 24Kg
					</select>
					<br>
                
                <input type="submit" value="Calcular">
				</fieldset>
            </form>
        </body>
    </html>