<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Exemplos do plugin multipleSelect</title>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>      
        <script type="text/javascript" src="../src/jquery.multipleSelect.js"></script>     

        <script type="text/javascript">
            
            $(function() {
                
                // Chamada com configurações padrão
                $('#estilos').multipleSelect();
                
                // Alterando a altura do elemento
                $('#interesses').multipleSelect({
                    height: '125px',
                    select_all_label: 'Todos'
                });
                
                // Usando o callback para remover o primeiro elemento
                $('#livro').multipleSelect({
                    select_all: false,
                    height: '300px',
                    callback: function(){
                       // descobre o ID do SELECT
                       var id_elemento = $(this).attr('id');
                       // Acessa remove a primeira linha da tabela
                       $('#multiple_' + id_elemento + ' tr').eq(0).remove();
                    }
                });
                
            });
            
        </script>

    </head>
    <body>

        Configuração padrão: <BR>
        <select id="estilos" name="estilos">
            <option value="1" selected="">Blues</option>
            <option value="2">Rock</option>
            <option value="3">Metal</option>
            <option value="5">MPB</option>
        </select>
        
        <BR><BR>
        Altura e texto Selecionar Todos modificado: <BR>
        <select id="interesses" name="interesses">
            <option value="f" selected="">Guitarra</option>
            <option value="v">Violão</option>
            <option value="b">Bateria</option>
            <option value="t">Teclado</option>
        </select>
        
        <BR><BR>
        Com callback para remover o primeiro elemento:<BR>
        <select id="livro" name="livro">
            <option value=''>Escolha o livro aqui...</option>
            <option value='1CO'>1 Coríntios</option>
            <option value='1CR'>1 Crônica</option>
            <option value='1JO'>1 João</option>
            <option value='1PE'>1 Pedro</option>
            <option value='1RS'>1 Reis</option>
            <option value='1SM'>1 Samuel</option>
            <option value='1TM'>1 Timóteo</option>
            <option value='1TS'>1 Tessalonicenses</option>
            <option value='2CO'>2 Coríntios</option>
            <option value='2CR'>2 Crônicas</option>
            <option value='2JO'>2 João</option>
            <option value='2PE'>2 Pedro</option>
            <option value='2RS'>2 Reis</option>
            <option value='2SM'>2 Samuel</option>
            <option value='2TM'>2 Timóteo</option>
            <option value='2TS'>2 Tessalonicenses</option>
            <option value='3JO'>3 João</option>
            <option value='AG'>Ageu</option>
            <option value='AM'>Amós</option>
            <option value='AP'>Apocalipse</option>
            <option value='AT'>Atos</option>
            <option value='CL'>Colossenses</option>
            <option value='CT'>Cânticos</option>
            <option value='DN'>Daniel</option>
            <option value='DT'>Deuteronômio</option>
            <option value='EC'>Eclesiastes</option>
            <option value='ED'>Esdras</option>
            <option value='EF'>Efésios</option>
            <option value='ET'>Ester</option>
            <option value='EX'>Êxodo</option>
            <option value='EZ'>Ezequiel</option>
            <option value='FM'>Filemón</option>
            <option value='FP'>Filipenses</option>
            <option value='GL'>Gálatas</option>
            <option value='GN'>Gênesis</option>
            <option value='HB'>Hebreus</option>
            <option value='HC'>Habacuque</option>
            <option value='IS'>Isaías</option>
            <option value='JD'>Judas</option>
            <option value='JL'>Joel</option>
            <option value='JN'>Jonas</option>
            <option value='JO'>João</option>
            <option value='JOH'>Jó</option>
            <option value='JR'>Jeremias</option>
            <option value='JS'>Josué</option>
            <option value='JZ'>Juízes</option>
            <option value='LC'>Lucas</option>
            <option value='LM'>Lamentações</option>
            <option value='LV'>Levítico</option>
            <option value='MC'>Marcos</option>
            <option value='ML'>Malaquias</option>
            <option value='MQ'>Miquéias</option>
            <option value='MT'>Mateus</option>
            <option value='NA'>Naum</option>
            <option value='NE'>Neemias</option>
            <option value='NM'>Números</option>
            <option value='OB'>Obadias</option>
            <option value='OS'>Oséias</option>
            <option value='PV'>Provérbios</option>
            <option value='RM'>Romanos</option>
            <option value='RT'>Rute</option>
            <option value='SF'>Sofonias</option>
            <option value='SL'>Salmo</option>
            <option value='TG'>Tiago</option>
            <option value='TT'>Tito</option>
            <option value='ZC'>Zacarias</option>
        </select>
        
    </body>
</html>
