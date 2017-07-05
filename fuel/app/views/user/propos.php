<!--Code html pour la page propos-->
</br>
    <div class='container'>
            <div class='row'>
                <div class='col-md-8'>
                    <hr style="width: 100%; color: black; height: 1px; background-color:#BDBDBD;" />
                    <p style="font-family:verdana; font-size:14px">    
                    <b>Toubib</b><font size='1' ><small>®</small></font> 
                    	est l’aboutissement de plus de <font id='demo_f'></font> années d’expérience en informatique dans le domaine de la santé.
                    	Son prédécesseur, en version dos, était le premier dossier informatisé au Québec. 
                        Développé par un médecin de la région de Lanaudière et très apprécié par ses utilisateurs. L’union de Logimédic
                        (prédécesseur de toubib) et Logipro enr. 
                        (Développement sur Windows et réseautique) a permis la réalisation d’un logiciel répondant vraiment aux attentes de tous les utilisateurs.</br>
                        Une version web présentement en développement devrait répondre à des besoins de plus en plus criants quant à la mobilité des prestateurs de soins.
                    </br>
                    </p>
                    <hr style="width: 100%; color: black; height: 1px; background-color:#BDBDBD;" />
                    <font class="text-danger" style="font-family:verdana; font-size:16px">
                    	<i>
                    		<strong>Rapidité, versatilité et intuitivité  voilà ce que toubib vous propose!</strong>
                    	</i>
                    </font>
                </div>

                <div class='col-md-4 col-md-offset-0'>
                    <hr style="width: 100%; color: black; height: 1px; background-color:#BDBDBD;" />                
                    <h3>Certifications:</h3>                    
                        <ul type="circle">
                            <li style="margin:10px 10px;">Homologué<img src="../images/msss.gif" alt="msss" style="margin:0 0 0 10px"  /></li>
                            <li style="margin:10px 10px;">Certifié OIIQ PTI&nbsp <img src="../images/OIIQ_80.gif" alt="oiiq" height="42" width="42" /></li>
                            <li style="margin:10px 10px;">Certifié DSQ<img src="../images/DSQ.gif" alt="dsq" style="margin:0 0 0 10px"  /></li>
                            <li style="margin:15px 10px;">Certifié RTSS</li>
                            <li style="margin:15px 10px;">Certifié SYRA</li>
                        </ul>                                       
                    <hr style="width: 100%; color: black; height: 1px; background-color:#BDBDBD;" />
                </div>
            </div>
        </div>

        <!--Script pour le premier paragraphe-->
        <script type="text/javascript">
            var auj = new Date();
            var deb = new Date("1/1/1991");
            var years = auj.getFullYear() - deb.getFullYear();        
            deb.setFullYear(auj.getFullYear());
            if(auj < deb){
                years--;
            }
            document.getElementById("demo_f").innerHTML = years;
            </script>