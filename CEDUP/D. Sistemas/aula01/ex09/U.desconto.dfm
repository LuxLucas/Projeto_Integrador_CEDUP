object frm_principal: Tfrm_principal
  Left = 0
  Top = 0
  Caption = 'Descontos'
  ClientHeight = 362
  ClientWidth = 202
  Color = clBtnFace
  Font.Charset = ANSI_CHARSET
  Font.Color = clWindowText
  Font.Height = -15
  Font.Name = 'Times New Roman'
  Font.Style = [fsBold]
  OldCreateOrder = False
  PixelsPerInch = 96
  TextHeight = 17
  object lb_valor: TLabel
    Left = 40
    Top = 48
    Width = 109
    Height = 17
    Caption = 'Valor do produto'
  end
  object lb_vista: TLabel
    Left = 56
    Top = 168
    Width = 51
    Height = 17
    Caption = #192' vista:'
  end
  object lb_v5x: TLabel
    Left = 40
    Top = 224
    Width = 47
    Height = 17
    Caption = 'Em 5x:'
  end
  object lb_v10x: TLabel
    Left = 40
    Top = 280
    Width = 130
    Height = 17
    Caption = 'Em 10x com +20%:'
  end
  object txt_valor: TEdit
    Left = 40
    Top = 71
    Width = 121
    Height = 25
    TabOrder = 0
  end
  object btn_calcular: TButton
    Left = 64
    Top = 120
    Width = 75
    Height = 25
    Caption = 'Calcular'
    TabOrder = 1
    OnClick = btn_calcularClick
  end
  object txt_vista: TEdit
    Left = 40
    Top = 191
    Width = 121
    Height = 25
    Enabled = False
    TabOrder = 2
  end
  object txt_v5x: TEdit
    Left = 40
    Top = 247
    Width = 121
    Height = 25
    Enabled = False
    TabOrder = 3
  end
  object txt_v10x: TEdit
    Left = 40
    Top = 303
    Width = 121
    Height = 25
    Enabled = False
    TabOrder = 4
  end
end
