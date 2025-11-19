import codecs

# Use a codificação que seu sistema Windows provavelmente usou por padrão
CODIFICACAO_DO_ARQUIVO = 'windows-1252' 
# Ou tente 'latin-1' se windows-1252 não funcionar

# Use open() para ser mais moderno, em vez de codecs.open()
with open("ArquivoDourado_Primitivo.txt", "r", encoding=CODIFICACAO_DO_ARQUIVO) as f_in:
    conteudo = f_in.read()

# Substitui todas as interrogações pelo caractere quadrado
conteudo_corrigido = conteudo.replace('?', '□')

# Salva no novo arquivo usando UTF-8, que é o padrão moderno
with open("ArquivoDourado.txt", "w", encoding='utf-8') as f_out:
    f_out.write(conteudo_corrigido)

print("Arquivo corrigido salvo em ArquivoDourado.txt")
