const ptkp = 54000000;
            const pkp5 = 60000000;
            const pkp10 = 100000000;
            const pkp15 = 200000000;
            const pkp20 = 500000000;

            function pajak5(gajisetahun){
                if(gajisetahun > pkp5){
                    return (ptkp - pkp5) * 5 / 100;
                }
                return (gajisetahun - ptkp) * 5 / 100;
            }
            function pajak10(gajisetahun){
                if(gajisetahun > pkp10){
                    return (pkp5 - pkp10) * 10 / 100;
                }
                return (gajisetahun - pkp10) * 10 / 100;
            }
            function pajak15(gajisetahun){
                if(gajisetahun > pkp15){
                    return (pkp10 - pkp15) * 15 / 100;
                }
                return (gajisetahun - pkp15) * 15 / 100;
            }
            function pajak20(gajisetahun){
                if(gajisetahun > pkp20){
                    return (pkp15 - pkp20) * 20 / 100;
                }
                return (gajisetahun - pkp20) * 20 / 100;
            }
            function pajak25(gajisetahun){
                return (gajisetahun - pkp20) * 25 / 100;
            }

            function pph21(gajisetahun){
                let pajak = 0;
                if(gajisetahun > ptkp){
                    pajak += pajak5(gajisetahun);
                    if(gajisetahun > pkp5){
                        pajak += pajak10(gajisetahun);
                        if(gajisetahun > pkp10){
                            pajak += pajak15(gajisetahun);
                            if(gajisetahun > pkp15){
                                pajak += pajak20(gajisetahun);
                                if(gajisetahun > pkp20){
                                    pajak += pajak25(gajisetahun);
                                }
                            }
                        }
                    }
                }else{
                    alert("Penghasilan anda tidak kena pajak");
                }
                alert("Pajak penghasilan anda: " + pajak);
            }
