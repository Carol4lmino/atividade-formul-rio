<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Validação de Formulário PHP </title>
</head>
<body>
  <main>
    <div>
        <h2> Validando tipos diversos de campos de formulário</h2>
        <form action="valida.php" method="post">
            <p> Nome: <input type="text" name="nome"></p>
            <p> Senha: <input type="password" name="pass"></p>
            <p> Idade: <input type="number" name="idade"></p>
            <p> Telefone: <input type="tel" name="fone"></p>
            <p> Email: <input type="email" name="endEmail"></p>
            <hr>
            <h4>Uma forma de organizar melhor o formulário com PHP</h4>
            <fieldset>
                <legend>
                    Tipo 'radio' escolha uma opção entre várias - campo "name" é igual em todas as opções
                </legend>
                <p>
                <input type="radio" name="comidaPref" value="Arroz com Feijão e Carne">
                <label for="camidaPref">Arroz com Feijão e Carne</label>
                </p>
                <p>
                <input type="radio" name="comidaPref" value="Arroz com Macarrão e Carne">
                <label for="comidaPref">Arroz com Macarrão e Carne</label>
                </p>
                <p>
                <input type="radio" name="comidaPref" value="Baião e Carne">
                <label for="comidaPref">Baião e Carne</label>
                </p>
                <p>
                <input type="radio" name="comidaPref" value="Baião, Salada e Carne">
                <label for="comidaPref">Baião, Salada e Carne</label>
                </p>
            </fieldset>
            <fieldset>
                <legend>Tipo:'checkbox' - Escolha mais de uma opção - Disciplinas</legend>
                <p>
                <input type="checkbox" name="redes" value="Redes de Computadores">
                <label for="redes">Redes de Computadores</label>
                </p>
                <p>
                <input type="checkbox" name="JavaScript" value="Java Script">
                <label for="JavaScript">Java Script</label>
                </p>
                <p>
                <input type="checkbox" name="biologia" value="Biologia">
                <label for="biologia">Biologia</label>
                </p>
                <p>
                <input type="checkbox" name="design" value="Design">
                <label for="design">Design</label>
                </p>
            </fieldset>
            <fieldset>
                <legend>Em qual carro gostaria de viajar?</legend>
                <label for="cars">Chose a car</label>
                <select name="cars">
                    <option value="Onix Plus">Onix</option>
                    <option value="toro">Toro</option>
                    <option value="Corola">Opel</option>
                    <option value="Polo">audi</option>
                </select>
            </fieldset>
            <fieldset>
                <legend>
                    Qual sua nota de Satisfação para o Curso de Informática ?
                </legend>
                <label for="nota">Valores de 0 a 100</label>
                <input type="rango" min="8" max="100" name="nota">
            </fieldset>
            <fieldset>
                <legend>
                    Qual a data do seu aniversário?
                </legend>
                <label for="date">Quando você deve ganhar presentes?</label>
                <input type="date" name="date">
            </fieldset>
            <fieldset>
             <legend>
                Qual o horário que geralmente vai dormir?
             </legend>
             <label for="mimi">Que horas você geralmente capota?</label>
             <input type="time" name="mimiu">
            </fieldset>
            <hr>
        
            <button type="submit"> Enviar e Mostrar</button>
        </form>
    </div> 
  </main>
</body>
</html>