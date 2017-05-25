<?php

namespace BinaryStudioAcademy\Task2;

class EmojiGenerator
{
    public function generate()
    
		{
			for($i = 0x1f600; $i <=0x1f606; ++$i) 
			{
				yield  '&#'.$i; // На жаль не маю чим тестити. Судячи з файла тесту, зробив висновок, що має бути ітератор без виведення готового рядка.
			}
		}
}
