# SASS Structure - UtreBytes Welcome Page

Este directorio contiene todos los estilos SASS para el sitio web de bienvenida de UtreBytes.

## Estructura de Archivos

### Archivos Principales

- **app.scss** - Archivo principal que importa todos los demás archivos SASS

### Variables y Mixins

- **variables.scss** - Define todas las variables de color, espaciado, tipografía y breakpoints
- **mixins.scss** - Contiene mixins reutilizables para flexbox, responsividad, botones, etc.

### Estilos Base

- **base.scss** - Estilos base para elementos HTML (reset, tipografía, espaciado)

### Componentes

Dentro de la carpeta `components/`:

- **navbar.scss** - Estilos para la barra de navegación
- **hero.scss** - Estilos para la sección hero (portada)
- **features.scss** - Estilos para la sección de características
- **cta.scss** - Estilos para la sección de llamada a la acción
- **footer.scss** - Estilos para el pie de página

## Características

### Diseño Responsivo

- Breakpoints definidos:
  - SM: 640px
  - MD: 768px
  - LG: 1024px
  - XL: 1280px

### Color Palette

- **Primario**: #3b82f6 (Azul)
- **Secundario**: #10b981 (Verde)
- **Acento**: #f59e0b (Ámbar)
- **Oscuro**: #0f172a
- **Claro**: #f8fafc

### Transiciones y Animaciones

- Incluye transiciones suaves para hover effects
- Animación de fade-in para el hero
- Efectos de levantamiento en tarjetas (transform)

## Cómo Compilar

Este proyecto usa Vite para compilar los archivos SASS. La compilación se realiza automáticamente durante el desarrollo.

Para desarrollo:
```bash
npm run dev
```

Para producción:
```bash
npm run build
```

## Personalización

Todos los valores pueden ser personalizados editando los archivos en este directorio:

1. **Cambiar colores**: Edita `variables.scss`
2. **Ajustar espaciado**: Edita las variables `$space-*` en `variables.scss`
3. **Modificar efectos**: Edita los mixins en `mixins.scss`
4. **Crear nuevos componentes**: Añade un nuevo archivo en `components/` e impórtalo en `app.scss`
