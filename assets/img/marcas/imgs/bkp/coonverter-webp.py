import os
from PIL import Image

# Verificar se a pasta 'n' existe, senão, criar
if not os.path.exists('n'):
    os.makedirs('n')

# Converter todas as imagens em uma pasta para WebP e salvar na pasta 'n'
for filename in os.listdir('.'):
    if filename.endswith('.png') or filename.endswith('.jpg') or filename.endswith('.jpeg'):
        with Image.open(filename) as im:
            # Se a imagem for PNG, manter a transparência
            if im.format == 'PNG':
                im.save(f'n/{os.path.splitext(filename)[0]}.webp', lossless=True)
            else:
                im.save(f'n/{os.path.splitext(filename)[0]}.webp')
