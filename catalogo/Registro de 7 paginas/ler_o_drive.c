#include <stdio.h>
#include <dirent.h>
#include <string.h>
#include <errno.h>

const char* extrair_extensao(const char *filename) {
    const char *dot = strrchr(filename, '.');
    
    if (!dot || dot == filename) {
        return ""; // Retorna string vazia se não tiver extensão válida
    }
    
     // Retorna o ponteiro para o caractere imediatamente após o último ponto
    return dot + 1; 
}


void funcaodourada() {
    DIR *dir;
    struct dirent *entry;
    const char *path = "."; 

    dir = opendir(path);
    if (dir == NULL) {
        fprintf(stderr, "Erro ao abrir o diretorio atual: %s\n", strerror(errno));
        return;
    }

    printf("Processando arquivos na pasta '%s':\n", path);

    FILE *Dourado = fopen("ArquivoDourado_Primitivo.txt", "wb");

    char codigo_old [1024] = "";

    while ((entry = readdir(dir)) != NULL) {
        if (strcmp(entry->d_name, ".") == 0 || strcmp(entry->d_name, "..") == 0) {
            continue;
        }

        const char* nome_completo = entry->d_name;
        const char* extensao = extrair_extensao(nome_completo);
        char codigo [1024];

        int size_org = strlen(nome_completo);
        int size_ext = strlen(extensao);

        int size_cod = size_org - size_ext - 1;

        strncpy(codigo, nome_completo, size_cod);
        codigo[size_cod] = '\0';

        if ((strcmp(codigo, codigo_old)) == 0){
            continue;
        }
        strncpy(codigo_old, codigo, size_cod);
        codigo_old[size_cod] = '\0';

        fputs(codigo, Dourado);
        fputs("||||||", Dourado);
        fputs(nome_completo, Dourado);
        fputs("\n", Dourado);         
    }
    fclose(Dourado);
    closedir(dir);
}

int main() {
    funcaodourada();
    return 0;
}